<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{
    public function index()
    {
        return view ('register');
    }


    // データベースに保存する
    public function create(Request $request)
    {
        $form = $request->all();
        $form['password'] = Hash::make($form['password']);
        User::create($form);
        return redirect('/register');
        // サンクスページに飛ばせるとグッド
    }
    // ここまで

}


