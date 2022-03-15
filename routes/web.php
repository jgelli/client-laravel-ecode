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


Route::get('/', [App\Http\Controllers\ClientController::class, 'index'])->name('client');

Route::get('/client/signup', [App\Http\Controllers\ClientController::class, 'signUp'])->name('client.signup');
Route::post('/client/register', [App\Http\Controllers\ClientController::class, 'register'])->name('client.register');
Route::post('/client/edit', [App\Http\Controllers\ClientController::class, 'edit'])->name('client.edit');


Route::get('/client/signin', [App\Http\Controllers\ClientController::class, 'signIn'])->name('client.signin');
Route::post('/client/login', [App\Http\Controllers\ClientController::class, 'login'])->name('client.login');
Route::get('/client/logout', [App\Http\Controllers\ClientController::class, 'logout'])->name('client.logout');


Route::prefix('admin')->group(function () {
    Auth::routes();

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('client.filter');
    Route::get('/edit/{id}', [App\Http\Controllers\ClientController::class, 'editById'])->name('admin.client.edit');
    
});



