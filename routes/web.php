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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/staff', App\Http\Controllers\StaffController::class)->only([
    'index', 'create', 'edit', 'store','update', 'destroy'
])->names('staff');

Route::resource('/product', App\Http\Controllers\ProductController::class)->only([
    'index', 'create', 'edit', 'show', 'store','update', 'destroy'
])->names('product');
