<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;


class AccountController extends Controller
{
public function index()
    {
        return view ('register');
    }

public function register(Request $request)
{
    // dump($request);
    // dd($request);
    // ddd($request);

}
// データベースに保存する
public function create(Request $request)
{
    // ddd($request);
    $form = $request->all();
    User::create($form);
    return redirect('/register');
}
// ここまで

}


