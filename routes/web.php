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
})->middleware('landing');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function(){
    
    // // Dashboard
    // Route::get('/', function () {
    //     return view('admin.index');
    // })->name('dashboard');
    // // Users

    Route::resource('users', \App\Http\Controllers\Admin\UsersController::class)->except(['store','update', 'destroy']);
});

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'verified']], function(){
    Route::get('/', [\App\Http\Controllers\UsersController::class, 'index'])->name('index');
});

require __DIR__.'/auth.php';
