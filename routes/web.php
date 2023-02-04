<?php

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
    return redirect('login');
});

Route::get('/admin', [\App\Http\Controllers\Admin::class, 'show'])->name('admin');
Route::get('/login', [\App\Http\Controllers\Input::class, 'show_form'])->name('login');
Route::post('/login_check', [\App\Http\Controllers\Input::class, 'show'])->name('login_check');


