<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\bevote;
use App\admin;
use App\history;

class AdminController extends Controller
{


    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function adduserpage()
    {
        return view('admin.adduser');
    }

    public function addelectorpage()
    {
        return view('admin.addelector');
    }

    public function adduser(Request $request)
    {
        $newUser = [
            'name' => $request->get('name'),
            'voteCount' => json_encode([
                'director'    => 0,
                'president'   => 0,
                'vpresident'  => 0,
                'secretary'   => 0,
                'supervisor'  => 0,
                'supervisors' => 0
            ])
        ];

        $user = user::create($newUser);

        return redirect('/admin/adduser')->with('status', '添加成功');;

    }

    public function addelector(Request $request)
    {
        $typearr = json_encode(array("director" => "理事会理事", "president" => "会长", "vpresident" => "副会长", "secretary" => "秘书长", "supervisor" => "监事长", "supervisors" => "监事"));
        $typename = json_decode($typearr, true);

        $newElector = [
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'typename' => $typename[$request->get('type')],
            'agree' => 0,
            'disagree' => 0,
            'waiver' => 0,
            'company' => $request->get('company'),
            'department' => $request->get('department'),
            'class' => $request->get('class')
        ];

        $bevote = bevote::create($newElector);
        return redirect('/admin/addelector')->with('status', '添加成功');
    }

    public function users()
    {
        $users = user::all();
        return view('admin.users', compact('users'));
    }

    public function electors()
    {
        $users = bevote::all();
        return view('admin.electors', compact('users'));
    }

    public function deluser(Request $request, $id){
        $deleted = user::where('id', $id)->delete();
        $historys = history::where('userid', $id)->get();
        foreach ($historys as $historykey => $history) {
          # code...
            $bevote = bevote::where(['id' => $history->votedid, 'type' => $history->type])->first();
            if($bevote){
              $bevote->decrement($history->state);
              $bevote->save();
            }
        }
        //delete history record
        history::where('userid', $id)->delete();
        return response()->json([
            'code' => 301,
            'url' => url('/admin/users')
        ]);
        //$user = user::
    }

    public function delelector(Request $request, $id){
        $deleted = bevote::where('id', $id)->delete();
        return response()->json([
            'code' => 301,
            'url' => url('admin/electors')
        ]);
    }

    public function result($type)
    {
        $users = bevote::where('type', $type)->orderBy('agree', 'desc')->get();

        return view('admin.result', compact('users', 'type'));
    }

    public function edituserpage($id)
    {
        $user = user::where('id', $id)->get();
        return view('admin.edituser', compact('user'));
    }

    public function edituser(Request $request, $id)
    {
        $user = user::where('id', $id)->update(['name' => $request->get('name')]);
        return redirect('/admin/users');
    }

    public function editelectorpage($id)
    {
      $user = bevote::where('id', $id)->get();
      return view('admin.editelector', compact('user'));
    }

    public function editelector(Request $request, $id)
    {
      $user = bevote::where('id', $id)->update([
        'name' => $request->get('name'),
        'company' => $request->get('company'),
        'department' => $request->get('department'),
        'class' => $request->get('class')
      ]);
      return redirect('/admin/electors');
    }

    public function switchpage(){
        $admin = admin::first();
        if(!isset($admin)){
          $state = 'close';
        }else{
          $state = $admin->switch;
        }
        return view('admin.switch', compact('state'));
    }

    public function switch (Request $request) {
        $admin = admin::first();
        if(!isset($admin)){
           $admin = admin::create();
        }
        if($request->get('state') === true){
            $admin->switch = 'open';
        }else{
            $admin->switch = 'close';
        }
        $admin->save();
    }

    public function delAllRec()
    {
      //delete users
        $users = user::all();
        foreach ($users as $key => $user) {
          # code...
          $voteCount = json_encode([
                          'director'    => 0,
                          'president'   => 0,
                          'vpresident'  => 0,
                          'secretary'   => 0,
                          'supervisor'  => 0,
                          'supervisors' => 0
                      ]);
          $user->voteCount = $voteCount;
          $user->save();
        }
        //delete bevote users
        $bevotes = bevote::all();
        foreach ($bevotes as $key => $bevote) {
          # code...
          $bevote->agree = 0;
          $bevote->disagree = 0;
          $bevote->waiver = 0;
          $bevote->save();
        }
        //delete history
        history::truncate();
        //return
        return response()->json([
            'code' => 301,
        ]);
    }

    public function delCurUserRec($id)
    {
          //delete current bevote record
          $user = user::where('id', $id)->first();
          $historys = history::where('userid', $user->id)->get();
          foreach ($historys as $historykey => $history) {
            # code...
              $bevote = bevote::where(['id' => $history->votedid, 'type' => $history->type])->first();
              if($bevote){
                $bevote->decrement($history->state);
                $bevote->save();
              }
          }
          //delete history record
          history::where('userid', $user->id)->delete();
          //delete current user record
          $voteCount = json_encode([
                          'director'    => 0,
                          'president'   => 0,
                          'vpresident'  => 0,
                          'secretary'   => 0,
                          'supervisor'  => 0,
                          'supervisors' => 0
                      ]);
          $user->voteCount = $voteCount;
          $user->save();
          return response()->json([
              'code' => 301,
          ]);
    }

    // public function delCurElectorRec($id)
    // {
    //       //delete current bevote record
    //       $bevote = bevote::where('id', $id)->first();
    //       $bevote->agree = 0;
    //       $bevote->disagree = 0;
    //       $bevote->waiver = 0;
    //       $bevote->save();
    //       // //delete
    //       // $historys = history::where('votedid', $bevote->id)->get();
    //       // foreach ($historys as $historykey => $history) {
    //       //   # code...
    //       //     $user = user::where('id', $history->userid)->first();
    //       //     //question
    //       //     $voteCount = json_decode($user->voteCount, true);
    //       //     $voteCount[$history->state] = 0;
    //       //     $user->save();
    //       // }
    //       //delete history record
    //       history::where('votedid', $bevote->id)->delete();
    //       return response()->json([
    //           'code' => 301,
    //       ]);
    // }

    public function delCurUserTypeRec ($id, $type)
    {
      //delete current bevote record
      $user = user::where('id', $id)->first();
      $historys = history::where('userid', $user->id)->get();
      foreach ($historys as $historykey => $history) {
        # code...
          $bevote = bevote::where(['id' => $history->votedid, 'type' => $type])->first();
          if($bevote){
            $bevote->decrement($history->state);
            $bevote->save();
          }
      }
      //delete history record
      history::where(['userid' => $user->id, 'type' => $type])->delete();
      //delete current user record
      $voteCount = json_decode($user->voteCount, true);
      $voteCount[$type] = 0;
      $user->voteCount = json_encode($voteCount);
      $user->save();
      return response()->json([
          'code' => 301,
      ]);
    }

    public function test(Request $request)
    {
        dd(session('isAdmin'));
    }
}
