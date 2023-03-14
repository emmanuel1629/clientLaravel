<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ServicesController;
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
//=====================Ruta principal ===============================777
    Route::get('/',function(){return view('ejemploVistaVue');});

//=====================Ruta Cliente ===============================777

    Route::get('/clientes',[ClientesController::class,'index'])->name('clientes.index');
    Route::get('/cliente',[ClientesController::class,'create']);
    Route::get('/cliente/delete/{cliente}',[ClientesController::class,'delete'])->name('cliente.delete');
    Route::get('/cliente/{cliente}',[ClientesController::class,'view'])->name('cliente.view');
    Route::post('/cliente',[ClientesController::class,'store'])->name('cliente.store');
    Route::post('/cliente/update/',[ClientesController::class,'update'])->name('cliente.update');

//=====================Ruta Servicios ===============================777

    Route::get('/servicios',[ServicesController::class,'index'])->name('services.index');
    Route::get('/servicios/crearServicio',[ServicesController::class,'create']);
    Route::get('/servicios/delete/{servicios}',[ServicesController::class,'delete'])->name('services.delete');
    Route::get('/servicios/{servicios}',[ServicesController::class,'view'])->name('services.view');
    Route::post('/servicios',[ServicesController::class,'store'])->name('services.store');
    Route::post('/servicios/update/',[ServicesController::class,'update'])->name('services.update');
    