<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\AccountController;
use App\Http\Controllers\backend\AdministrationController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\front\AuthController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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
Route::match(["POST", "GET"], '/', [HomeController::class, 'index'])
    ->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->name('dashboard');
    Route::get('/my_deposit', [DashboardController::class, 'my_deposit'])
        ->name('my_deposit');
    Route::get('/my_investment', [DashboardController::class, 'my_investment'])
        ->name('my_investment');
    Route::get('/my_withdraw', [DashboardController::class, 'my_withdraw'])
        ->name('my_withdraw');
    Route::match(["POST", "GET"],'/make_deposit', [DashboardController::class, 'make_deposit'])
        ->name('make_deposit');
    Route::match(["POST", "GET"],'/make_withdraw', [DashboardController::class, 'make_withdraw'])
        ->name('make_withdraw');
    Route::post('/make_investiment', [DashboardController::class, 'make_investiment'])
        ->name('make_investiment');
    Route::match(["POST", "GET"],'/my_profil', [AccountController::class, 'profil'])
        ->name('profil');
    Route::post('/uploadimage', [AccountController::class, 'updatePhoto'])
        ->name('uploadimage');
});
Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/transaction', [AdministrationController::class, 'transaction'])
        ->name('transaction');
    Route::get('/investiments', [AdministrationController::class, 'investiments'])
        ->name('investiments');
    Route::match(["POST", "GET"],'/users', [AdministrationController::class, 'users'])
        ->name('users');
    Route::match(["POST", "GET"],'/transaction/{id}', [AdministrationController::class, 'transaction_detail'])
        ->name('transaction_detail');
    Route::match(["POST", "GET"],'/user/{id}', [AdministrationController::class, 'user_detail'])
        ->name('user_detail');
});
Route::match(['POST','GET'],'/login', [AuthController::class, 'login'])
    ->name('login');
Route::match(['POST','GET'],'/register_post', [AuthController::class, 'register'])
    ->name('register_post');
Route::get('/destroy', [AuthController::class, 'destroy'])
    ->name('destroy');
