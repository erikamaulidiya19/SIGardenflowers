<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bungaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\regisController;
use App\Http\Controllers\HiasController;
use App\Http\Controllers\buahController;
use App\Http\Controllers\cafeController;


Route::get('/', function () {
    return view('index');
});
Route::get('/index',[userController::class,'index']);
Route::get('/user',[userController::class,'user'])->middleware('auth');
Route::get('/admin',[adminController::class,'admin']);
Route::get('/adminbunga',[bungaController::class,'bunga_backend']);

Route::get('/login',[loginController::class,'login']);
Route::get('/regis',[regisController::class,'regis']);
Route::post('/regis-user', [regiscontroller::class, 'store']);
Route::post('/login-user',[loginController::class,'aunt']);
Route::post('/logout',[loginController::class,'logout']);

Route::get('/tanamanhias',[HiasController::class,'tanamanhias']);
Route::get('/bunga',[bungaController::class,'bunga']);
Route::get('/tabeltanaman',[HiasController::class,'datatanaman']);
Route::get('/tabelbunga',[bungaController::class,'databunga']);
Route::get('/buah',[buahController::class,'databuah']);
Route::get('/cafe',[cafeController::class,'datacafe']);

Route::get('/insertbunga',[bungaController::class,'viewinsert']);
Route::post('/databunga',[bungaController::class,'tambahbunga']);
Route::post('/deletebunga',[bungaController::class,'hapusbunga']);
