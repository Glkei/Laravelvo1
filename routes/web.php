<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


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

//ログインされてなくても処理される内容
Route::group(['middleware' => ['guest']], function () {
    // ログインフォーム表示
    Route::get('/', [AuthController::class, 'showLogin'])->name('login.show');
    //ログイン画面に遷移
    Route::get('Admin/login', function() {return view('login');})->name('login');
    // ログイン処理
    Route::post('login', [AuthController::class, 'login'])->name('login');

  });
  
  //ログインしていないと処理されない内容
  Route::group(['middleware' => ['auth']], function () {
    // ホーム画面
    Route::get('home', function() {return view('home');})->name('home');
    // プロフィール
    Route::get('Admin.profile', function() {return view('profile');})->name('profile');
    // ログアウト
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
  }); 

