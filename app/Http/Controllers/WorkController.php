<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Work;
use Carbon\Carbon;


class WorkController extends Controller
{
    // 打刻ページ表示
    public function index()
    {
        return view ('index');
    }

    // 勤務開始登録_
    public function start(Request $request)
    {
        // $user = Auth::user();
        // ddd($user);
        // ここから変数の宣言
        $user_id = Auth::id();
        $work_date = Carbon::today()->format('Y-m-d'); 
        $start_time = Carbon::now()->format('H:i:s');
        

        Work::create([
            'user_id' => $user_id,
            'work_date' => $work_date,
            'start_time' => $start_time,
            ]);

            return redirect('/');
    }

        // 勤務終了登録
        // ここは更新処理（Update)


    public function end(Request $request)
    {
        // 更新かける前に更新するためのデータを特定する処理
        $user_id = Auth::id();
        $work_date =Carbon::today()->format('Y-m-d');
        $work = Work::where('user_id',$user_id)->where('work_date',$work_date)->first();
        
        if($work){
            $start_time = $work->start_time;
            $end_time = $work->end_time;
        }else{
            return redirect('/');
        }
    }


    
}
