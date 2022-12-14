<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

    Route::get('/product', [ ProductController::class, "index_view" ])->name('product');
    Route::view('/product/new', "pages.product.product-new")->name('product.new');
    Route::view('/product/edit/{productId}', "pages.product.product-edit")->name('product.edit');

    Route::get('/quotation', [ QuotationController::class, "index_view" ])->name('quotation');
    Route::view('/quotation/new', "pages.quotation.quotation-new")->name('quotation.new');
    Route::view('/quotation/edit/{quotationId}', "pages.quotation.quotation-edit")->name('quotation.edit');
});
