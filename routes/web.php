<?php
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\PortafolioController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/',[PortafolioController::class,'datosPortafolio']);

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');;
Route::get('portafolio',[PortafolioController::class,'index'])->name('portafolio')->middleware('auth');;
Route::get('portafolio/create',[PortafolioController::class,'create'])->name('create')->middleware('auth');;
Route::post('portafolio',[PortafolioController::class,'store'])->name('store')->middleware('auth');
Route::get('portafolio/{id}',[PortafolioController::class,'show'])->name('show');
Route::get('portafolio/edit/{id}',[PortafolioController::class,'edit'])->name('edit')->middleware('auth');
Route::put('portafolio/{portafolio}',[PortafolioController::class,'update'])->name('update')->middleware('auth');
Route::delete('portafolio/{portafolio}',[PortafolioController::class,'destroy'])->name('destroy')->middleware('auth');

Route::get('modelo',[ModeloController::class,'index'])->name('modelo');
Route::get('modelo/create',[ModeloController::class,'create'])->name('create1');
Route::post('modelo',[ModeloController::class,'store'])->name('store1');
//Route::get('portafolio',[PortafolioController::class,'index'])->name('portafolio');