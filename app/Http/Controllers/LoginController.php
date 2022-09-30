<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    return view ('login');
    } 

    public function login(Request $request)
    {
        // ddd($request)
    $text = ['text' => 'ログインして下さい。'];
    return view('auth', $text);
    }
    public function checkUser(Request $request)
    {
    $email = $request->email;
    $password = $request->password;
    if (Auth::attempt(['email' => $email,
    'password' => $password])) {
    $text =   Auth::user()->name . 'さんがログインしました';
    } else {
    $text = 'ログインに失敗しました';
    }
    return view('auth', ['text' => $text]);
    }


}
