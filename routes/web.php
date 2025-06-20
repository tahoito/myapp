<?php

use Illuminate\Support\Facades\Route;
// 使用するコントローラーをインポート
use App\Http\Controllers\TopController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\TaskController; 


Route::get('/', function () {
    return view('welcome');
});

// Route::メッソド(URL, [コントローラー::class, 関数名])->name(ルーティング名);
// メソッド -> get, post, put, delete, (patch)
Route::get('/top', [TopController::class, 'index'])->name("top");

Route::prefix('sign_up')->group(function () {
    Route::get('/',[SignUpController::class, 'index'])->name("sign_up");
    Route::post('/',[SignUpController::class, 'store'])->name("sign_up.store");

});

Route::prefix('login')->group(function() {
    Route::get('/',[LoginController::class,'index'])->name("login");
    Route::post('/',[LoginController::class,'store'])->name("login.store");

});

Route::prefix('task')->group(function () {
    Route::prefix('task')->group(function () {
        Route::get('/',[TaskController::class, 'index'])->name("task");
        Route::get('/create',[TaskController::class, 'create'])->name("task.create");
        Route::post('/',[TaskController::class,'store']);
    });
});
