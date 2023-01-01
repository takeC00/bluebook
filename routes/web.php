<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\HogeController;
use App\Http\Controllers\UpperLimitController;
use App\Http\Middleware\HelloMiddleware;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('hello', [HelloController::class, 'index']);

Route::post('hello', [HelloController::class, 'post']);
Route::get('hoge', [HogeController::class, 'index']);

Route::get('limitcount', [UpperLimitController::class, 'show']);
Route::post('limitcount', [UpperLimitController::class, 'post']);

Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);

Route::get('hello/edit', [HelloController::class, 'edit']);
Route::post('hello/edit', [HelloController::class, 'update']);

Route::get('hello/del', [HelloController::class, 'del']);
Route::post('hello/del', [HelloController::class, 'remove']);
