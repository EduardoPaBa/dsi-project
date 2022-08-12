<?php

use App\Http\Livewire\Producto\Productos;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboardU', function () {
        return view('dashboardU');
    })->name('dashboardU');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/example', 'example')->name('example');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::view('/listadoCatalogo', 'catalogo.listado')->name('listCatalog');
    Route::view('/agregarCatalogo/{valueidCata?}', 'catalogo.agregar')->name('addCatalog');

    Route::view('/listadoCategoria', 'categoria.listado')->name('listCategor');
    Route::view('/agregarCategoria/{valueidCate?}', 'categoria.agregar')->name('addCategor');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/productos',Productos::class)->name('productos');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/agregarSolicitud', 'solicitud.agregar')->name('addSolicitud');
    Route::view('/listadoSolicitud', 'solicitud.listado')->name('listSolicitud');
    Route::view('/editarSolicitud', 'solicitud.editar')->name('editSolicitud');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/agregarSubCategoria/{valueidSubCate?}', 'subcategoria.agregar')->name('addSubCate');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/listadoSubCategoria', 'subcategoria.listado')->name('listSubCate');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/agregarSolicitudEspecial/{valueidSoliEspecial?}', 'solicitudespecial.agregar')->name('addSoliEspecial');
});

/*Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/editarSolicitudEspecial/{valueidSoliEspecial?}', 'solicitudespecial.editar')->name('editSoliEspecial');
});*/

Route::middleware(['auth', 'verified'])->group(function () {
     Route::view('/listadoSolicitudEspecial', 'solicitudespecial.listado')->name('listSolicitudEspecial');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/listadoSolicitudEspecialAdmin', 'solicitudespecial.listadoadmin')->name('listSoliEspecialAdmin');
});
