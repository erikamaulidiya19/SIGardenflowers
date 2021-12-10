<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bungaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\regisController;


Route::get('/', function () {
    return view('index');
});
Route::get('/index',[userController::class,'index']);
Route::get('/user',[userController::class,'user'])->middleware('auth');
Route::get('/admin',[adminController::class,'admin']);
Route::get('/admin',[bungaController::class,'bunga_backend']);
Route::get('/login',[loginController::class,'login']);
Route::get('/regis',[regisController::class,'regis']);
Route::post('/regis-user', [regiscontroller::class, 'store']);
Route::post('/login-user',[loginController::class,'aunt']);
Route::post('/logout',[loginController::class,'logout']);


