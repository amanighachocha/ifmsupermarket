<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [HomeController::class,'index'])->name('login');
Route::get('logout',[SessionController::class,'destroy'])->name('logout');
Route::post('authenticate',[SessionController::class,'store']);
Route::get('categories',[DashboardController::class,'showCategories']);
Route::get('locale/{locale}',[HomeController::class,'changeLocale']);
