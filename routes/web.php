<?php

use App\Http\Controllers\AirlineHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PilotsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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

// ! HOME
Route::get('/', HomeController::class);
// ! LOGIN
Route::controller(LoginController::class)->group(function () {
    // TODO MOSTRAR VISTA
    Route::get('/login', "index");
    // TODO ENVIAR VALIDACIÓN
    Route::post('/login', "login");
});

// ! REGISTER
Route::controller(RegisterController::class)->group(function () {
    // TODO MOSTRAR VISTA
    Route::get('/register', "index");
    // TODO REGISTRAR USUARIO
    Route::post('/register', "store");
});

// ! RUTAS DEL HOME DEL USUARIO AIRLINE
Route::controller(AirlineHomeController::class)->group(function () {
    // TODO MOSTRAR VISTA
    Route::get('/airline/home', "show");
    // TODO ENVIAR INFORMACIÓN DE USUARIO
});

// ! RUTAS DE PILOTOS
Route::controller(PilotsController::class)->group(function () {
    // TODO MOSTRAR VISTA DEL REGISTRO DE PILOTS
    Route::get('/airline/PilotsRegister', 'showRegister');
    Route::get('/airline/PilotsDirectory', 'showList');
});
