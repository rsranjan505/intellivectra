<?php

use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\Landing\CareerController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

#############################################################
################ LANDING #####################################
#############################################################

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-us',[AboutController::class,'index'])->name('about');
Route::get('/careers',[CareerController::class,'index'])->name('career');
Route::get('/blogs',[BlogController::class,'index'])->name('blogs');
Route::get('/contact-us',[ContactController::class,'index'])->name('contact');
