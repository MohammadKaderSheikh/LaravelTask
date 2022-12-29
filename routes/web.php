<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskManageController;
use App\Http\Controllers\LoginController;
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
    return view('Home');
});

// Route::get('/loginForm',[TaskController::class,"loginForm"]);
Route::get('/resistration',[TaskController::class,"Resistration"]);
Route::get('/show',[TaskManageController::class,'ShowTask']);

// login
Route::get('/login',[LoginController::class,'LoginFrom'])->name('login');
Route::post('/login',[LoginController::class,'Login']);
Route::get('/task',function(){
    return "login success you can add your task ";
});

