<?php

use App\Http\Controllers\AutomovelController;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', [UserController::class,'cadastro'])->name('cadastro');
Route::post('/login', [UserController::class,'login'])->name('login');
Route::post('/register', [UserController::class, 'auth'])->name('register');

Route::get('/automovel', [AutomovelController::class, 'create'])->name('automovel');
Route::post('/automovel', [AutomovelController::class, 'store'])->name('register.imovel');

Route::get('/imovel', [ImovelController::class, 'create'])->name('imovel');
Route::post('/imovel', [ImovelController::class,'store'])->name('register.imovel');
Route::get('/dashboard', [ImovelController::class, 'dashboard'])->name('dashboard');
