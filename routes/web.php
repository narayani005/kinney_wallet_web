<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\walletController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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

Route::view('/login', 'kinney_wallet.login');
Route::view('/register', 'kinney_wallet.register');
Route::view('/forget_pwd', 'kinney_wallet.forget_pwd');
Route::view('/add_user', 'kinney_wallet.add_user');


Route::get('/', function () {
    return view('kinney_wallet.dashboard');
});

Route::get('/myprofile', [walletController::class, 'myprofile']);
Route::get('/mywallet', [walletController::class, 'mywallet']);
Route::get('/users', [walletController::class, 'all_user']);
Route::get('/add_wallet', [walletController::class, 'add_wallet']);
Route::post('/wallet_submit',[walletController::class, 'add_wallet_data']);
Route::post('/update_wallet',[walletController::class, 'update_wallet']);
Route::get('/wallet', [walletController::class, 'all_wallet']);
Route::get('/edit_profile/{id}', [walletController::class, 'edit_profile']);
Route::get('/delete_profile/{id}', [walletController::class, 'delete_profile']);
Route::post('/update_user', [walletController::class, 'update_user']);
Route::get('/edit_wallet/{wallet_id}', [walletController::class, 'edit_wallet']);
Route::get('/delete_wallet/{wallet_id}', [walletController::class, 'delete_wallet']);
Route::post('/user_submit', [walletController::class, 'user_submit']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

