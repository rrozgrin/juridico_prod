<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::resource('/users', UserController::class);
Route::get('/dashboard', function () {
    return view('app.dashboard');
});

//Exportar e Importar Usuários
Route::get('user/export/', [UserController::class, 'export']);
Route::get('user/import/', [UserController::class, 'importar']);
Route::post('user/import/', [UserController::class, 'import']);