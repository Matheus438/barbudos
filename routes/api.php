<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//serviço
Route::post('criarServico', [ServicoController::class, 'criarServico']);
Route::post('nome',[ServicoController::class, 'pesquisaPorNome']);
Route::delete('delete/{id}',[ServicoController::class, 'excluir']);
Route::put('update', [ServicoController::class, 'update']);
//serviço
Route::post('criarServico', [ClienteController::class, 'criarServico']);
Route::post('nome',[ClienteController::class, 'pesquisaPorNome']);
Route::post('celular',[ClienteController::class, 'pesquisaPorCelular']);
Route::post('cpf',[ClienteController::class, 'pesquisaPorCPF']);
Route::post('email',[ClienteController::class, 'pesquisaPorEmail']);
Route::delete('delete/{id}',[ClienteController::class, 'excluir']);
Route::put('update', [ClienteController::class, 'update']);