<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use App\Calender\Calender;

class MemoController extends Controller
{
    public function index()
    {
        return view('/memo');
    }
    /*public function show()
    {
        $calender = new Calender(time());

        return view('/memo', ["calender" => $calender]);
    }*/
    public function scheduleAdd(Request $request)
    {
        $request->validate([
            'start_date' => 'required | integer',
            'end_date' => 'required | integer',
            'event_name' => 'required | max:200'
        ]);
        //登録処理
        $schedule = new Schedule();
        //日付の変換。javascriptのタイムスタンプはミリ秒なので秒に変換
        $schedule->start_date = date('Y-m-d', $request->input('start_date') / 1000);
        $schedule->end_date = date('Y-m-d', $request->input('end_date') / 1000);
        $schedule->event_name = $request->input('event_name');
        $schedule->save();

        return view('/memo', ["schedule" => $schedule]);
    }
    public function scheduleGet(Request $request)
    {
        $schedule = new Schedule();
        $request->validate([
            'start_date' => 'required | integer',
            'end_time' => 'required | integer'
        ]);
        $start_date = date('Y-m-d', $request->input('start_date') / 1000);
        $end_date = date('Y-m-d', $request->input('end_time') / 1000);

        return Schedule::query()
            ->select(
                'start_date as start',
                'end_date as end',
                'event_name as title'
            )
            ->where('start_date', '>', $start_date)
            ->where('end_date', '<', $end_date)
            ->get();

        return view('/memo', ["schedule" => $schedule]);
    }
}
