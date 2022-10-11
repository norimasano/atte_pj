<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LoginController;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\BreakingController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/register', [AccountController::class, 'index']);
// Route::post('/register', [AccountController::class, 'register']);
Route::post('/register', [AccountController::class, 'create']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
// Route::get('/login', [LoginController::class, 'check']);
Route::post('/login', [LoginController::class,'checkUser']);
// Route::get('/', [WorkController::class, 'index']);
Route::get('/work/start', [WorkController::class, 'start']);
Route::get('/work/end', [WorkController::class, 'end']);
Route::get('/breaking/start', [BreakingController::class, 'start']);
Route::get('/breaking/end', [BreakingController::class, 'end']);