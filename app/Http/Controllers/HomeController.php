<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\attendance;
use App\Models\attendanceend;
use App\Models\rset;
use Carbon\Carbon;
class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // 勤怠開始
    public function start()
    {
        $user = Auth::user();//ログインしているユーザー
        $attendance = [//$attendanceに入れる中身
            'user_id' => $user->id,
            'date' => Carbon::today(), //今日の日付
            'start_time' => Carbon::now(), //現時刻
            'end_time' => null,
        ];
        DB::table('attendances')->insert($attendance);//tableのattendancesに$attendanceを入れる
        return redirect('/home');
    }
    //勤怠終了
    public function end()
    {
        // Log::info('最初');
        $user = Auth::user();
        $attendance = DB::table('attendances')->where('user_id', $user->id)
                    ->where('date', Carbon::today())->latest();//sqlの発行
        $timestamp = Carbon::now();
        $attendance->update([
            'end_time' => $timestamp,
        ]);
        // DB::table('attendances')->insert($timestamp);
        return redirect('/home');
}

// 休憩開始
public function rest_start()
    {
        $user = Auth::user();
        $attendance = attendance::where('user_id', $user->id)->latest()->first();
        $rest = [
            // 'user_id' => $user->id,
            'attendance_id' => $attendance->id,
            'date' => Carbon::today(), //今日の日付
            'rests_strat' => Carbon::now(), //現時刻
            'rests_end' => null,
        ];
        DB::table('rests')->insert($rest);
        return redirect('/home');
    }
public function rest_end()
    {
        $user = Auth::user();//現ユーザー
        $rests = DB::table('rests')->where('attendance_id', $attendance->id)->where('date', Carbon::today())->latest();
        $timestamp =Carbon::now();
        $rests->update([
            'rests_end' => $timestamp,
        ]);
        return redirect('/home');


    }
}