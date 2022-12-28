<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\http\Controllers\DisplayController;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\StampController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/display', [DisplayController::class, 'index']);

Route::get('/memo', [MemoController::class, 'index']);
Route::get('/show', [MemoCOntroller::class, 'show']);
Route::get('/schedule-add', [MemoController::class, 'scheduleAdd']);
Route::get('/schedule-get', [MemoController::class, 'scheduleGet']);
Route::get('/memo2', function() {
  return view('/memo');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'checkUser']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/', [StampController::class, 'index']);