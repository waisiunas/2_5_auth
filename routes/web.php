<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminDashboardController;

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
    return view('auth.login');
});

Route::controller(RegisterController::class)->group(function() {
    Route::get('/register','signup')->name('register');
    Route::post('/register','register');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/login','signin')->name('login');
    Route::post('/login','login');
});

Route::controller(LogoutController::class)->group(function() {
    Route::get('/logout','logout')->name('logout');
});

Route::controller(AdminDashboardController::class)->group(function() {
    Route::get('/admin/dashboard','index')->name('admin.dashboard');
});

Route::controller(CourseController::class)->group(function() {
    Route::get('/courses','index')->name('courses.index');
    Route::get('/courses/create','create')->name('courses.create');
    Route::post('/courses/create','store');
});



