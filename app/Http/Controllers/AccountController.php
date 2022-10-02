<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
public function index()
{
    return view ('register');
}


// データベースに保存する
public function create(Request $request)
{
    // ddd($request);
    $form = $request->all();
    User::create($form);
    return redirect('/register');
    // サンクスページに飛ばせるとグッド
}
// ここまで

}


