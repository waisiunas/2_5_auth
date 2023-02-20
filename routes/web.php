<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'signup'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'signin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/admin/dashboard', function(){
    return view('admin.dashboard');
})->name('admin.dashboard');

