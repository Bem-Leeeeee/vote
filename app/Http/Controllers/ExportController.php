<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bevote;
use Excel;
use App\user;

class ExportController extends Controller
{
    //
    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function getDate()
    {
        return date("y-m-d h:i:s", time());
    }

    public function export (Request $request, $type)
    {
      $excelUser = bevote::where('type', $type)->first();
      $users = bevote::where('type', $type)->orderBy('agree', 'desc')->get();

      Excel::create('深圳技师学院校友会选票结果', function($excel) use($users, $excelUser, $type) {
          $excel->sheet($excelUser->typename, function($sheet) use($users, $excelUser, $type) {
              $sendVote = 0;    //发出选票
              $isuseVote = 0;   //有效票
              $backVote = 0;    //收回选票
              $wasteVote = 0;   //废弃票
              //Count
              $allUser = user::all();
              foreach ($allUser as $key => $user) {
                # code...
                $voteCount = json_decode($user->voteCount, true);
                if($voteCount[$type] == 1 ){
                  $isuseVote++;
                }else if($voteCount[$type] == 0 ){
                  $wasteVote++;
                }
                $sendVote++;
              }
              $backVote = ($sendVote - $wasteVote);

              $sheet->prependRow(1, array(
                  '深圳市深圳技师学院校友会第一届校友代表大会第一次全体会议"'.$excelUser->typename.'"选举选票统计表'
              ));

              $sheet->prependRow(2, array(

                  '本次选举发出选票'.$sendVote.'张，收回选票'.$backVote.'张，其中有效票'.$isuseVote.'张，废票'.$wasteVote.'张'

              ));

              $sheet->prependRow(3, array(
                  '序号',
                  '候选人姓名',
                  '候选人单位及职务',
                  '院系',
                  '班级',
                  '赞成',
                  '反对',
                  '弃权'
              ));

              // $sheet->setSize(array(
              //         'A3' => array(
              //                 'height'    => 30,
              //                 'width' => 50
              //         )
              // ));

              $sheet->setSize('A3', 20, 30);
              $sheet->setSize('B3', 20, 30);
              $sheet->setSize('C3', 50, 30);
              $sheet->setSize('D3', 30, 30);
              $sheet->setSize('E3', 30, 30);

              $line=4;
              foreach ($users as $key => $user) {
                # code...
                $line++;
                $sheet->row($line, array(
                  $key+1,
                  $user->name,
                  $user->company,
                  $user->department,
                  $user->class,
                  $user->agree,
                  $user->disagree,
                  $user->waiver
                ));
              }
              // for($i=4; $i<10; $i++){
              //     $count++;
              //     $sheet->row($i, array(
              //             'test'.$i, 'test'.($i+1)
              //     ));
              // }//end for()

                $sheet->row($line+2, array(
                    '计票人签名:'
                ));
                $sheet->row($line+4, array(
                    '监票人签名:'
                ));
                $sheet->row($line+6, array(
                    '总监票签名:'
                ));
                $sheet->row($line+8, array(
                    $this->getDate()
                ));

                $sheet->mergeCells('A1:M1');
                $sheet->mergeCells('A2:M2');
                $sheet->mergeCells('A'.($line+2).':'.'M'.($line+3));
                $sheet->mergeCells('A'.($line+4).':'.'M'.($line+5));
                $sheet->mergeCells('A'.($line+6).':'.'M'.($line+7));
                $sheet->mergeCells('A'.($line+8).':'.'M'.($line+9));
                //$sheet->mergeCells('A2:M2');


                $sheet->cells('A1:M44', function($cells) {
                    // manipulate the range of cells
                    $cells->setAlignment('center');
                    $cells->setValignment('center');
                });

                $sheet->cells('A'.($line+2).':'.'M'.($line+7), function($cells) {
                    $cells->setAlignment('left');
                    $cells->setValignment('left');
                });

                $sheet->cells('A'.($line+8).':'.'M'.($line+9), function($cells) {
                    $cells->setAlignment('right');
                    $cells->setValignment('right');
                });

                $sheet->cells('A1:M1', function($cells) {
                    // manipulate the range of cells
                    $cells->setFontSize(16);
                    $cells->setFontWeight('bold');
                });
                $sheet->cells('A2:M2', function($cells) {
                    // manipulate the range of cells
                    $cells->setFontSize(16);
                });
                $sheet->cells('A3:M3', function($cells) {
                    // manipulate the range of cells
                    $cells->setFontSize(12);
                    $cells->setBackground('#CCCCCC');
                });
                //$sheet->mergeCells('A3:M3');
          });

          // $excel->sheet('会长', function($sheet) {
          //     $sheet->row(1, array(
          //             'test1', 'test2'
          //     ));
          // });
          // // Our second sheet
          // $excel->sheet('副会长', function($sheet) {
          //     $sheet->fromArray(array(
          //             array('data1', 'data2'),
          //             array('data3', 'data4')
          //     ));
          // });
          // $excel->sheet('秘书长', function($sheet) {
          //     $sheet->fromArray(array(
          //             array('data1', 'data2'),
          //             array('data3', 'data4')
          //     ));
          // });
          // $excel->sheet('监视长', function($sheet) {
          //     $sheet->fromArray(array(
          //             array('data1', 'data2'),
          //             array('data3', 'data4')
          //     ));
          // });
          // $excel->sheet('监事', function($sheet) {
          //     $sheet->fromArray(array(
          //             array('data1', 'data2'),
          //             array('data3', 'data4')
          //     ));
          // });
      })->export('xls');
    }
}
