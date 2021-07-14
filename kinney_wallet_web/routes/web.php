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

Route::view('/login', 'kinney_wallet.login');
Route::view('/register', 'kinney_wallet.register');
Route::view('/forget_pwd', 'kinney_wallet.forget_pwd');


Route::get('/', function () {
    return view('welcome');
});

Route::view('/myprofile', 'kinney_wallet.myprofile');
Route::view('/mywallet', 'kinney_wallet.mywallet');
Route::view('/users', 'kinney_wallet.users');
Route::view('/add_user', 'kinney_wallet.add_user');
Route::view('/wallet', 'kinney_wallet.wallet');
Route::view('/add_wallet', 'kinney_wallet.add_wallet');
Route::view('/edit_profile', 'kinney_wallet.edit_profile');