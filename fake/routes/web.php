<?php

use App\Http\Controllers\sessionController;
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

// Front page
Route::get('/', function () {
    return view('home');
});

// Login page
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [sessionController::class, 'login']);

// Register page
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [sessionController::class, 'register']);

Route::get('/logout', [sessionController::class, 'destroy']);
