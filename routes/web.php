<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return redirect('login');
});

Route::get('/admin', [\App\Http\Controllers\Admin::class, 'show'])->middleware('auth')->name('admin');
Route::get('/login', [\App\Http\Controllers\Input::class, 'show_form'])->name('login');
Route::post('/login_check', [\App\Http\Controllers\Input::class, 'show'])->name('login_check');

Route::get('/regist', [\App\Http\Controllers\Regist::class, 'show'])->name('regist');
Route::post('/regist_check', [\App\Http\Controllers\Regist::class, 'show_check'])->name('regist_check');

Route::get('/back', function (Request $request){
    $request->session()->invalidate();
    return redirect('/');
})->name('back');
