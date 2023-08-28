<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cad-categoria', [App\Http\Controllers\CategoriaController::class, 'index'])->name('cad-categoria');
Route::post('cad-categoria/salvar', [App\Http\Controllers\CategoriaController::class, 'salvar']);

Route::get('/cad-candidato', [App\Http\Controllers\CandidatoController::class, 'index'])->name('cad-candidato');
Route::post('cad-candidato/salvar', [App\Http\Controllers\CandidatoController::class, 'salvar']);

Route::get('/cad-votacao', [App\Http\Controllers\VotacaoController::class, 'criar'])->name('cad-votacao');
Route::post('cad-votacao/salvar', [App\Http\Controllers\VotacaoController::class, 'salvar']);

Route::get('/votacao', [App\Http\Controllers\VotacaoController::class, 'lista'])->name('lista-votacoes');
Route::get('/votacao/{hash}', [App\Http\Controllers\VotacaoController::class, 'index'])->name('votacao');

Route::get('/cad-categoria-candidato', [App\Http\Controllers\CategoriaCandidatoController::class, 'index'])->name('categoria-candidato');
Route::post('cad-categoria-candidato/salvar', [App\Http\Controllers\CategoriaCandidatoController::class, 'salvar']);



