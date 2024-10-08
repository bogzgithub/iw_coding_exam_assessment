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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('role:staff|admin');
Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('role')->middleware('role:admin');
Route::get('/permission', [App\Http\Controllers\PermissionController::class, 'index'])->name('permission')->middleware('role:admin');
