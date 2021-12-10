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

Route::view('/admin', 'admin.index')->name('admin-home-page');
Route::view('/admin/layout-static', 'admin.layout-static')->name('admin-layout-static-page');
Route::view('/admin/charts', 'admin.charts')->name('admin-charts-page');
Route::view('/admin/tables', 'admin.tables')->name('admin-tables-page');
Route::view('/admin/layout-sidenav-light', 'admin.layout-sidenav-light')->name('admin-layout-sidenav-light');
// auth
Route::view('/admin/login', 'admin.login')->name('admin-login-page');
Route::view('/admin/register', 'admin.register')->name('admin-register-page');
Route::view('/admin/forgotPassword', 'admin.password')->name('admin-fortgot-password-page');
// error
Route::view('/admin/500', 'admin.500')->name('admin-500-page');
Route::view('/admin/401', 'admin.401')->name('admin-401-page');
Route::view('/admin/404', 'admin.404')->name('admin-404-page');
