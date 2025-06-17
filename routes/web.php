<?php

use Illuminate\Support\Facades\Route;
// 使用するコントローラーをインポート
use App\Http\Controllers\TopController;

Route::get('/', function () {
    return view('welcome');
});

// Route::メッソド(URL, [コントローラー::class, 関数名])->name(ルーティング名);
// メソッド -> get, post, put, delete, (patch)
Route::get('/top', [TopController::class, 'index'])->name("top");
