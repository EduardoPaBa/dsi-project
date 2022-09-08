<?php

use App\Http\Livewire\Producto\Productos;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;


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


/* -------------- VISTAS DEL ADMIN ---------------------- */
Route::middleware(['auth', 'isAdmin'])->group(function () {
    /* CATALOGO */
    Route::view('/listadoCatalogo', 'catalogo.listado')->name('listCatalog');
    Route::view('/agregarCatalogo/{valueidCata?}', 'catalogo.agregar')->name('addCatalog');

    /* CATERGORIA */
    Route::view('/listadoCategoria', 'categoria.listado')->name('listCategor');
    Route::view('/agregarCategoria/{valueidCate?}', 'categoria.agregar')->name('addCategor');

    /* PRODUCTOS */
    Route::view('/productos','producto.productos')->name('productos');

    /* SUB CATEGORIA */
    Route::view('/listadoSubCategoria', 'subcategoria.listado')->name('listSubCate');
    Route::view('/agregarSubCategoria/{valueidSubCate?}', 'subcategoria.agregar')->name('addSubCate');

    /* LISTADO DE SOLICITUDES */
    Route::view('/listadoSolicitud', 'solicitud.listado')->name('listSolicitud');

    /* LISTADO DE SOLICITUDES ESPECIALES */
    Route::view('/listadoSolicitudEspecialAdmin', 'solicitudespecial.listadoadmin')->name('listSoliEspecialAdmin');

    /* LISTADO DE PROMOCIONES */
    Route::view('/agregarPromocion', 'promociones.agregar')->name('addPromocion');
});




/* -------------- VISTAS DEL USUARIO ---------------------- */
Route::middleware(['auth', 'isUser'])->group(function () {

    /* SOLICITUD ESPECIAL */
    Route::view('/agregarSolicitudEspecial/{valueidSoliEspecial?}', 'solicitudespecial.agregar')->name('addSoliEspecial');
    Route::view('/listadoSolicitudEspecial', 'solicitudespecial.listado')->name('listSolicitudEspecial');

    /* CONTACTO */

    Route::view('/infoContacto', 'contact-form.correos')->name('Contacto');

    /* CATALOGOS */
    Route::view('/Catalogos', 'catalogo.catalogos-cliente')->name('CatalogosCliente');

    
    
    


});






Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/agregarSolicitud', 'solicitud.agregar')->name('addSolicitud');
    Route::view('/editarSolicitud', 'solicitud.editar')->name('editSolicitud');
});




