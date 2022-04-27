<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;

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

//aplicação
Route::get('/', function () {
    return view('app.dashboard');
});

//resources
Route::resource('/users', UserController::class);
Route::resource('/categoria', CategoriaController::class);



//Exportar e Importar Usuários
Route::get('user/export/', [UserController::class, 'export']);
Route::get('user/import/', [UserController::class, 'importar']);
Route::post('user/import/', [UserController::class, 'import']);

//Exportar e Importar Usuários
Route::get('categoria/export/', [CategoriaController::class, 'export']);
Route::get('categoria/import/', [CategoriaController::class, 'importar']);
Route::post('categoria/import/', [CategoriaController::class, 'import']);