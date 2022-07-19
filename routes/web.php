<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::get('login', [AuthController::class, 'getLogin'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'getRegister'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegister'])->name('register.post');
Route::get('/', [AuthController::class, 'index'])->name('dashboard');

Route::get('/password/reset', [AuthController::class, 'reset'])->name('password.reset');
Route::post('/password/send-token', [AuthController::class, 'sendResetToken'])->name('password.token.send');
Route::post('/password/resend-token', [AuthController::class, 'reSendResetToken'])->name('password.token.resend');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
