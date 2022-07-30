<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rutasController;
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