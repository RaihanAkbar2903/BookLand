<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class, 'index']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/login',[HomeController::class, 'login']);
Route::get('/register',[HomeController::class, 'register']);
Route::get('/item',[HomeController::class, 'item']);
Route::get('/layouts/navbar',[HomeController::class, 'navbar']);
Route::get('/layouts/carousel',[HomeController::class, 'carousel']);
