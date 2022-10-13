<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Work;

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
        Work::create([
            'user_id' => $user_id,
            'date' => $work_date,
            'start_time' => $start_time,
            ]);
            return redirect('/');

    }

    // 勤務終了登録
    public function end(Request $request)
    {
        $user = Auth::user();

        // $endTime = 
    }


    
}
