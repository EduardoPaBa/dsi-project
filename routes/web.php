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


/* -------------- VISTAS DE SUPER ADMIN o JEFE ---------------------- */
Route::middleware(['auth', 'isSupAdmin'])->group(function () {

    Route::view('/listadoEmpleado', 'empleados.listado')->name('listEmplea');
    Route::view('/agregarEmpleado/{valueidEmplea?}', 'empleados.agregar')->name('addEmplea');
    Route::view('/Reporte-Nuevos-Usuarios', 'reportes.nuevos-usuarios')->name('reporteUsers');
    Route::view('/Reporte-Aceptacion-Productos', 'reportes.aceptacion-productos')->name('reporteAcep');
    Route::view('/Reporte-Usuarios-Productos', 'reportes.usuarios-mas-productos')->name('reporteUsuaProd');
});


/* -------------- VISTAS DE  ADMIN O SUPERVISOR---------------------- */
Route::middleware(['auth', 'isAdmin'])->group(function () {


});



/* -------------- VISTAS DE EMPLEADO O AGENTE DE VENTAS ---------------------- */
Route::middleware(['auth', 'isEmpleado'])->group(function () {
    /* CATALOGO */
    Route::view('/listadoCatalogo', 'catalogo.listado')->name('listCatalog');
    Route::view('/agregarCatalogo/{valueidCata?}', 'catalogo.agregar')->name('addCatalog');

    /* CATERGORIA */
    Route::view('/listadoCategoria', 'categoria.listado')->name('listCategor');
    Route::view('/agregarCategoria/{valueidCate?}', 'categoria.agregar')->name('addCategor');

    /* PRODUCTOS */
    Route::view('/productos','producto.productos')->name('productos');
    Route::view('/productosMasVendidos','producto.productos-mas-vendidos')->name('productosMasVendidos');

    /* SUB CATEGORIA */
    Route::view('/listadoSubCategoria', 'subcategoria.listado')->name('listSubCate');
    Route::view('/agregarSubCategoria/{valueidSubCate?}', 'subcategoria.agregar')->name('addSubCate');

    /* LISTADO DE SOLICITUDES */
    Route::view('/listadoSolicitud', 'solicitud.listado')->name('listSolicitud');

    /* LISTADO DE SOLICITUDES ESPECIALES */
    Route::view('/listadoSolicitudEspecialAdmin', 'solicitudespecial.listadoadmin')->name('listSoliEspecialAdmin');

    /* LISTADO DE PROMOCIONES */
    Route::view('/agregarPromocion', 'promociones.agregar')->name('addPromocion');
    Route::view('/promoMasVendida', 'promociones.promociones-mas-vendidas')->name('PromocionMasVendida');
});




/* -------------- VISTAS DEL USUARIO ---------------------- */
Route::middleware(['auth', 'isUser'])->group(function () {

    /* SOLICITUD ESPECIAL */
    Route::view('/agregarSolicitudEspecial/{valueidSoliEspecial?}', 'solicitudespecial.agregar')->name('addSoliEspecial');
    Route::view('/listadoSolicitudEspecial', 'solicitudespecial.listado')->name('listSolicitudEspecial');

    /* CONTACTO */

    Route::view('/infoContacto', 'contact-form.correos')->name('Contacto');

    /* CATALOGOS */
    Route::view('/catalogo-productos', 'catalogo.catalogos-cliente')->name('CatalogosCliente');


    /* PRODUCTOS */
    Route::view('/InformacionProducto', 'producto.expansion-info')->name('Expansion');



    /* CARRITO DE COMPRA */
    Route::view('/carritoCompras', 'shop.cart-shoppin')->name('carritodeComprass');

    /* SOLICITUD */
    Route::view('/agregarSolicitud', 'solicitud.agregar')->name('addSolicitud');
    Route::view('/editarSolicitud', 'solicitud.editar')->name('editSolicitud');





});






Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/agregarSolicitud', 'solicitud.agregar')->name('addSolicitud');
    Route::view('/editarSolicitud', 'solicitud.editar')->name('editSolicitud');
});






Addchat::routes();
