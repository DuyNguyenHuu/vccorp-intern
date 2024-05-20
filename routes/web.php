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

Route::get('/addCustomer',[PagesController::class, 'addCustomer']);
Route::get('/deleteCustomer',[PagesController::class, 'deleteCustomer']);
Route::get('/updateCustomer',[PagesController::class, 'updateCustomer']);

Route::resource('/customers', CustomersController::class);

Route::get('/addOrder',[PagesController::class,'addOrder']);
Route::get('/deleteOrder',[PagesController::class,'deleteOrder']);
Route::get('/updateOrder',[PagesController::class,'updateOrder']);

Route::resource('/orders', OrdersController::class);

Route::get('/addCompany',[PagesController::class,'addCompany']);
Route::get('/deleteCompany',[PagesController::class,'deleteCompany']);
Route::get('/updateCompany',[PagesController::class,'updateCompany']);

Route::resource('/companys', CompanysController::class);