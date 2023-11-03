<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstadioController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\JuegoController;

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

Route::get('/', HomeController::class);

Route::controller(UserController::class)->group(function(){
    
    Route::get('usuarios', 'index')->name('usuarios.index');;

    Route::get('usuarios/create', 'create')->name('usuarios.create');

    Route::post('usuarios/', 'store')->name('usuarios.store');

    Route::get('usuarios/{usuario}',  'show')->name('usuarios.show');

    Route::get('usuarios/{usuario}/edit', 'edit')->name('usuarios.edit');

});

Route::controller(EstadioController::class)->group(function(){

    Route::get('estadios', 'index')->name('estadios.index');
    Route::get('estadios/create', 'create')->name('estadios.create');
    Route::get('estadios/{estadio}', 'show')->name('estadios.show');
});

Route::controller(EquipoController::class)->group(function(){

    Route::get('equipos', 'index')->name('equipos.index');
});

Route::controller(FaseController::class)->group(function(){

    Route::get('fases', 'index')->name('fases.index');
});

Route::controller(GrupoController::class)->group(function(){

    Route::get('grupos', 'index')->name('grupos.index');
});

Route::controller(HorarioController::class)->group(function(){

    Route::get('horarios', 'index')->name('horarios.index');
});

Route::controller(JuegoController::class)->group(function(){

    Route::get('juegos', 'index')->name('juegos.index');
});