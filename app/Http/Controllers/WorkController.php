<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    // 勤務開始処理
    public function start(Request $request)
    {
        $user = Auth::user();
        // $startTime = 
        // return view ('index');
    }

    // 勤務終了登録
    public function end(Request $request)
    {
        $user = Auth::user();

        // $endTime = 
    }



    
}
