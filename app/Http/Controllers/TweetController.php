<?php

namespace App\Http\Controllers;

use App\tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TweetController extends Controller
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
        $tweets = DB::table('tweets')->where('user_email', $uemail)->paginate(4); //->get();
        Log::info((string) $tweets);
        return view('tweets.index', ['tweets' => $tweets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tweet_text' => 'required|max:140',
        ]);
        Log::info((string) $request->get('user_email'));
        $tweet = new tweet([
            'tweet_text' => $request->get('tweet_text'),
            'user_email' => request()->user()->email,
        ]);
        $tweet->save();
        return redirect('/tweets')->with('success', 'Tweet is Published');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tweet = Tweet::find($id);
        $tweet->delete();
        return redirect('/tweets')->with('success', 'Your tweet has been deleted Successfully');
    }
}
