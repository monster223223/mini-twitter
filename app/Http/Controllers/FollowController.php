<?php

namespace App\Http\Controllers;

use App\Follow;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FollowController extends Controller
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
        $users = DB::table('users')->whereNotIn('email', [Auth::user()->email])->paginate(4);
        Log::info((string) $users);
        return view('follows.userList', ['users' => $users, 'follows' => Follow::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Follow::create([
            'user_email_1' => request()->user_email_1,
            'user_email_2' => request()->user_email_2,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Follow::where([
            ['user_email_1', '=', request()->user()->email],
            ['user_email_2', '=', $request->user_email_2],
        ])->count() > 0) {
            return redirect('/follows')->with('success', __('You are already following this person'));
        } else {
            Log::info((string) $request->get('user_email_1'));
            Log::info((string) $request->get('user_email_2'));

            $tweet = new Follow([
                'user_email_1' => request()->user()->email,
                'user_email_2' => $request->user_email_2,
            ]);
            $tweet->save();
            return redirect('/follows')->with('success', __('User is Followed'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Follow::where([
            ['user_email_1', '=', request()->user()->email],
            ['user_email_2', '=', request()->user_email_2],
        ])->count() > 0) {
            Log::info((string) request()->get('user_email_1'));
            Log::info((string) request()->get('user_email_2'));
            $follow = Follow::where([
                ['user_email_1', '=', request()->user()->email],
                ['user_email_2', '=', request()->user_email_2],
            ]);
            $follow->delete();

            return redirect('/follows')->with('success', __('User is Unfollowed'));

        } else {
            return redirect('/follows')->with('success', __('You are not following that person'));
        }
    }
}
