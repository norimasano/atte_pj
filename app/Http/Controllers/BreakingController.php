<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Work;
use App\Models\Breaking;
use Carbon\Carbon;


class BreakingController extends Controller
{
    //休憩開始処理
    public function start(Request $request)
    {
        // 休憩開始アクション
        // 変数の宣言
        $user_id = Auth::id();
        $work_date = Carbon::today()->format('Y-m-d');
        $work = Work::where('user_id',$user_id)->where('work_date',$work_date)->first();
        $work_id = $work->id;
        $start_time = Carbon::now()->format('H:i:s');

        breaking::create([
            'work_id' => $work_id,
            'work_date' => $work_date,
            'start_time' => $start_time,
        ]);
            return redirect('/');
    }

    // 休憩終了登録
    public function end(Request $request)
    {
        $user_id = Auth::id();
        $work_date = Carbon::today()->format('Y-m-d');     
        $work = Work::where('user_id',$user_id)->where('work_date',$work_date)->first();  
        $work_id = $work->id;
        $end_time = Carbon::now()->format('H:i:s'); 
        $work = breaking::where('work_id',$work_id)->whereNull('end_time')->update(['end_time' => $end_time]);

            return redirect('/');


    }
}
