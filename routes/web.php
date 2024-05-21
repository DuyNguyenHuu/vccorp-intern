<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CompanysController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/save-user', 'App\Http\Controllers\UserController@saveUser');

Route::get('/home',[PagesController::class, 'home']);//->middleware('checklogin::class')//

Route::resource('/customers', CustomersController::class);

Route::resource('/orders', OrdersController::class);

Route::resource('/companys', CompanysController::class);