<?php

namespace App\Http\Controllers;

use App\history;
use App\user;
use App\bevote;
use Illuminate\Http\Request;


class VotingController extends Controller
{

      public function __construct()
      {
          $this->middleware('isLogin');
          $this->middleware('isOpen');
      }

     public function voting(Request $request, $type, $name)
     {

         //check have Authiroze
         $voteUser = user::where('name', session('name'))->first();
         if (json_decode($voteUser->voteCount, true)[$type] == 1)
         return response()->json([
             'code' => 304,
             'url' => url('/vote')
         ]);

         //check data length
         $bevoteUsers = bevote::where('type', $type)->get();
         $count = $bevoteUsers->count();
         $stateData = $request->get('state');
         $state = json_decode($stateData, true);
         if($count != count($state)){
           return response()->json([
             'code' => 305,
             'url' => url('/vote/'.$type)
           ]);
         }

         //bevoted user vote increment
         //

         while(list($key,$value) = each($state)){
           $bevoteUser = bevote::where(['name'=>$key,'type'=>$type])->first();
           $bevoteUser->increment($value);

           //add history
           $newHistory = [
               'userid' => session('id'),
               'votedid' => $bevoteUser->id,
               'type' => $type,
               'state' => $value
           ];

           history::create($newHistory);
         }

         //user vote increment
         $voteCount = json_decode($voteUser->voteCount, true);
         $voteCount[$type] = 1;

         $voteUser->voteCount = json_encode($voteCount);

         $voteUser->save();

         return response()->json([
             'code' => 301,
             'url' => url('/vote')
         ]);
     }
}
