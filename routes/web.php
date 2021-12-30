<?php

use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::get('/register', [AuthController::class,'viewRegister'])->name('register-page');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register-user');
Route::get('/login', [AuthController::class, 'viewLogin'])->name('login-page');
Route::post('/login', [AuthController::class,'postAuthenticate'])->name('login');

Route::get('/logout', [AuthController::class, 'getLogout'])->name('logout-page');

Route::get('/dashboard',function (){
    return 'logado' . auth()->user()->email;
})->middleware('auth');
