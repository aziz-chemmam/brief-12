<?php

use App\Http\Controllers\RecetteController;
use App\Http\Controllers\RecettesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/recettes',[RecettesController::class,"create"]);
Route::post('/recettes',[RecettesController::class,"store"]);
Route::get('delete-recette/{id}',[RecettesController::class,"destroy"]);
Route::get('editRecette/{id}',[RecettesController::class,"edit"]);
Route::post('editRecette/{id}', [RecettesController::class, "update"]);
