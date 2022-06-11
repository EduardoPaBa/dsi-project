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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/example', 'example')->name('example');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/agregarCatalogo/{valueidCata?}', 'catalogo.agregar')->name('addCatalog');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/listadoCatalogo', 'catalogo.listado')->name('listCatalog');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/listadoCategoria', 'categoria.listado')->name('listCategor');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/productos',Productos::class)->name('productos');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/agregarSolicitud', 'solicitud.agregar')->name('addSolicitud');
    Route::view('/listadoSolicitud', 'solicitud.listado')->name('listSolicitud');
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
