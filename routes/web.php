<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');


Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
Route::post('/store-user', [UserController::class, 'store'])->name('user.store');

Route::get('/entrar-user', [UserController::class, 'entrar'])->name('user.entrar');
Route::post('/login-user', [UserController::class, 'login'])->name('user.login');