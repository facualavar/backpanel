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
Route::apiResource("empresas","EmpresasController");

//Usuarios
Route::apiResource("usuarios","UsuariosController");

//Productos
Route::apiResource("productos","ProductosController");

//Rubros
Route::apiResource("rubros","RubrosController");

//Rubros
Route::apiResource("subrubros","SubSubRubrosController");

//Rubros
Route::apiResource("subsubrubros","SubSubRubrosController");

//Marcas
Route::apiResource("marcas","MarcasController");

//Precios
Route::apiResource("precios","PreciosController");

//Etiquetas
Route::apiResource("etiquetas","EtiquetasController");