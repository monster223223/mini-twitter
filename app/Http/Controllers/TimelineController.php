<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TimelineController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uemail = Auth::user()->email;
        $q1 = DB::table('follows')
            ->select('follows.user_email_2 as email')
            ->where('follows.user_email_1', '<>', 'follows.user_email_2')
            ->where('follows.user_email_1', '=', Auth::user()->email);
        $tbl1 = DB::table('tweets')
            ->whereIn('user_email', $q1)
            ->get();
        Log::critical((string) $tbl1);
        $inserts = [];
        foreach ($tbl1 as $tok) {
            $inserts[] = [
                'id' => '' . (string) Auth::user()->email . '' . (string) $tok->user_email . '' . (string) $tok->tweet_text . '' . (string) $tok->id,
                'user_email_1' => Auth::user()->email,
                'user_email_2' => $tok->user_email,
                'tweet_text' => $tok->tweet_text,
                'tweet_id' => $tok->id,
            ];
        }
        try {
            DB::table('timelines')->insert($inserts);
        } catch (QueryException $e) {}
        $timelines = DB::table('timelines')->where('user_email_1', '=', Auth::user()->email)->paginate(4);
        Log::info((string) $timelines);
        return view('timelines.timeline', ['timelines' => $timelines]);
    }
}
