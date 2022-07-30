<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rutasController;
use App\Http\Controllers\productosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/
//rutas formato directo
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/listarProducto', function () {
//     return view('listarProducto');
// });
// Route::get('/ingresaP', function () {
//     return view('ingresaP');
// });
// Route::get('/eliminaP', function () {
//     return view('eliminaP');
// });
// Route::get('/bodega/{sucursal?}/{direccion?}', function($sucursal="Mi Bodega", $direccion="Stgo Centro"){
//     return view('bodega')
//     ->with('sucursal',$sucursal);
// });

//rutas via controller
Route::get('/index', [rutasController::class, 'showindex']);
Route::get('/', [rutasController::class, 'showindex']);
Route::get('/listarProducto', [rutasController::class, 'showlistarproducto']);
Route::get('/bodega/{sucursal?}/{direccion?}', [rutasController::class, 'showbodega']);
Route::get('/ingresaP', [rutasController::class, 'showIngresaP']);
Route::get('/eliminaP', [rutasController::class, 'showeliminaP']);
Route::post('agregaP', [
     'uses' => 'App\Http\Controllers\productosController@agregarProducto',
     'as' => 'agregarPro'
 ]);
