<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\admin;
use App\bevote;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        if ($request->get('password') == 'vote123456')
        {
            session(['isAdmin' => 'true']);
            return redirect('/admin/switch');
        }

        return redirect('/admin/login')->with('status', '管理员密码有误');
    }

    public function showlogin()
    {
        return view('admin.login');
    }

    public function check(Request $request)
    {
        //check system state
        $admin = admin::first();
        if (!isset($admin)) {
          return redirect('/')->with('status', '投票系统未开启');
        }
        if(isset($admin)) {
            if($admin->switch == 'close'){
              return redirect('/')->with('status', '投票系统未开启');
            }
        }
        //check user state
        $user = user::where('name', $request->get('name'))->first();
        if ($user) {
            session(['name' => $user->name]);
            session(['id' => $user->id]);
            session(['isLogin' => true]);
            return redirect('/vote');
        }
        else {
            return redirect('/')->with('status', '请检查姓名是否正确,或者未录入系统');
        }
    }



    public function index()
    {
        return view('index');
    }

    public function result($type)
    {
        $users = bevote::where('type', $type)->orderBy('agree', 'desc')->get();

        return view('result', compact('users', 'type'));
    }
}
