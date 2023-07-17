<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('tutorial');
});


Route::get('/user', function () {
    return view('user.index');
})->name('user.home');

Route::get('/user/{id}', [UserController::class,'index'])->name('user.detail');
Route::get('/user/edit/{id}', [UserController::class,'edit'])->name('user.edit');

Route::get('/article', Article::class)->name('article');
