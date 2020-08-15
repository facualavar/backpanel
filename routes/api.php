<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Empresas
Route::apiResource("clientes","ClienteController");

//Usuarios
Route::apiResource("usuarios","UsuarioController");

//Productos
Route::apiResource("productos","ProductoController");

//Rubros
Route::apiResource("rubros","RubroController");

//Rubros
Route::apiResource("subrubros","SubSubRubroController");

//Rubros
Route::apiResource("subsubrubros","SubSubRubroController");

//Marcas
Route::apiResource("marcas","MarcaController");

//Precios
Route::apiResource("precios","PrecioController");

//Etiquetas
Route::apiResource("etiquetas","EtiquetaController");