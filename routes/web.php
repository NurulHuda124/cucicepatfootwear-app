<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PacketController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SpendingController;
use App\Http\Controllers\UserController;
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
    return view('home');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class,'index'])->middleware('admin');
Route::get('/packet', [Packetontroller::class,'show'])->middleware('auth');

Route::get('/dashboard/profile', [DashboardProfileController::class,'index'])->middleware('auth');
Route::put('/dashboard/profile/{id}',[DashboardProfileController::class,'updateData'])->middleware('auth');
Route::put('/dashboard/profile/{id}/updatepassword',[DashboardProfileController::class,'updatePassword'])->middleware('auth');

Route::get('/dashboard/setting', [DashboardSettingController::class,'index'])->middleware('admin');
Route::put('/dashboard/setting/{id}', [DashboardSettingController::class,'updateData'])->middleware('admin');

Route::resource('/dashboard/packets',PacketController::class)->middleware('auth');
Route::resource('/dashboard/orders',OrderController::class)->middleware('auth');
Route::get('/dashboard/invoice/{id}',[OrderController::class,'invoice'])->middleware('auth');
Route::resource('/dashboard/spendings', SpendingController::class)->middleware('auth');
Route::resource('/dashboard/assets', AssetController::class)->middleware('auth');
Route::resource('/dashboard/users', UserController::class)->middleware('admin');

Route::get('/dashboard/reports',[ReportController::class,'index'])->middleware('auth');
Route::get('/dashboard/reports/{startdate}/{enddate}',[ReportController::class,'print'])->middleware('auth');
Route::post('/dashboard/reports/processprint/{type}',[ReportController::class,'action'])->middleware('auth');