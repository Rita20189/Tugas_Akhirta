<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Frontend\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });




// Route::get('/about', function () {
//     return view('frontend.about');
// });

// Route::get('/service', function () {
//     return view('frontend.service');
// });

// Route::get('/menu', function () {
//     return view('frontend.menu');
// });

// Route::get('/contact', function () {
//     return view('frontend.contact');
// });

Route::get('/', [FrontendController::class,'index']);


Route::get('/dashboard', [BackendController::class,'index'])->middleware('auth');
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'login']);
Route::post('/login', [AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout']);
// Route::get('/login', 'AuthContro')->name('login');

