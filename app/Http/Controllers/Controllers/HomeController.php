<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function start(Reqest $request)
    {
        dd($request);
        $user = new User();
        $user = Auth::user();
        $timesteamp =Attendances::create( [
            'user_id' => $user->id,
            'date' => Carbon::today(), //今日の日付
            'start_time' => Carbon::now(), //現時刻
            'end_time' => null,
        ]);
        DB::table('attendances')->insert($timesteamp);
        return redirect('/home');
        // return view('home');
    }
}

