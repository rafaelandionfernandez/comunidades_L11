<?php

use App\Http\Controllers\Api\{
    ComunidadController,
    LoginController,
    MovimientoController,
    PropiedadController};
use Illuminate\Http\Request;
use App\Http\Middleware\ValidateJsonApiDocument;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//DB::listen(function($query){
//    dump($query->sql);
//});

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware gr oup. Enjoy building your API!
  |
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', LoginController::class)->name('api.v1.login');
//Route::withoutMiddleware(ValidateJsonAPIDocument::class)->post('login', LoginController::class)->name('api.v1.login');

Route::middleware('auth:sanctum')->name('api.v1')->apiResource('comunidades', ComunidadController::class)->parameter('comunidades', 'comunidad');
Route::name('api.v1')->apiResource('movimientos', MovimientoController::class);
Route::name('api/v1')->apiResource('propiedades', PropiedadController::class)->parameter('propiedades', 'propiedad');



// Copiado del api.php original después de instalar breeze
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
