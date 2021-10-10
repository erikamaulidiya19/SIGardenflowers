<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bungaController;


Route::get('/', function () {
    return view('index');
});
Route::get('/index',[userController::class,'index']);
Route::get('/user',[userController::class,'user']);
Route::get('/admin',[adminController::class,'admin']);
Route::get('/admin',[bungaController::class,'bunga_backend']);

