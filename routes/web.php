<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;

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

Route::get('/login', [AuthController::class,'showLoginForm']);
Route::post('/login', [AuthController::class,'login']);
Route::get('/forgot-password', [AuthController::class,'showForgotPasswordForm'])->name('forgotPassword');
Route::post('/forgot-password', [AuthController::class,'forgotPassword']);

Route::resource('companies', CompanyController::class);
