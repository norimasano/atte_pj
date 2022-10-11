<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BreakingController extends Controller
{
    //休憩開始処理
    public function start()
    {
        $user = Auth::user();
        // $startTime = 
        // return view ('index');
    }

    // 休憩終了登録
    public function end()
    {
        $user = Auth::user();

        // $endTime = 
    }
}
