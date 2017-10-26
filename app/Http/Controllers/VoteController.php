<?php

namespace App\Http\Controllers;

use App\history;
use App\user;
use App\bevote;
use Illuminate\Http\Request;

class VoteController extends Controller
{

    public $transform = [
        'director' => '理事会理事',
        'president' => '会长',
        'vpresident' => '副会长',
        'secretary' => '秘书长',
        'supervisor' => '监事长',
        'supervisors' => '监事'
    ];

    /**
     * VoteController constructor.
     */
    public function __construct()
    {
        $this->middleware('isLogin');
        $this->middleware('isOpen');
    }

    public function vote()
    {
        $username = session('name');
        $voteUser = user::where('name', $username)->with('history')->first();
        if(!isset($voteUser)){
          return view('/index');
        }
        $voteCount = json_decode($voteUser->voteCount, true);

        $historys = $voteUser->history;

        $transform = $this->transform;

        return view('vote', compact('voteCount', 'transform', 'voteUser', 'historys'));
    }

    public function voting(Request $request, $type)
    {
        $path = ['director', 'president', 'vpresident', 'secretary', 'supervisor', 'supervisors'];
        $username = session('name');

        //check have Authiroze
        $voteUser = user::where('name', $username)->first();
        if (json_decode($voteUser->voteCount, true)[$type] == 1)
            return redirect('/vote')->with('status', $this->transform[$type].'已经投票完成,无法更改');

        if (in_array($type,$path)) {
            $users = bevote::where('type', $type)->get();
            $typename = $users->first()->typename;
            $count = $users->count();
            return view('voting', compact('users','type', 'username', 'count', 'typename'));
        }
        echo 'path error';

    }
}
