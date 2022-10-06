<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login');
    }

    public function login(Request $request)
    {
        // ddd($request);
    //     $text = ['text' => 'ログインして下さい。'];
    // }

    // public function checkUser(Request $request)
    // {
        $email = $request->email;
        $password = $request->password;
    
    if (Auth::attempt(['email' => $email,'password' => $password]))
    {
        $text =   Auth::user()->name . 'さんがログインしました';
        return redirect ('index');
    
    } else {
        $text = 'ログインに失敗しました';
    }
        return view ('login');
    }


}
