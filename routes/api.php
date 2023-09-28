<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalController;
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
Route::delete('deletar/{id}',[ServicoController::class, 'excluir']);
Route::put('atualizacao', [ServicoController::class, 'update']);
//cliente
Route::post('criarCliente', [ClienteController::class, 'criarCliente']);
Route::post('nome',[ClienteController::class, 'pesquisaPorNome']);
Route::post('celular',[ClienteController::class, 'pesquisaCelular']);
Route::post('cpf',[ClienteController::class, 'pesquisaCPF']);
Route::post('email',[ClienteController::class, 'pesquisaEmail']);
Route::delete('delete/{id}',[ClienteController::class, 'exclui']);
Route::put('update', [ClienteController::class, 'update']);
Route::put('esqueciSenha',[ClienteController::class, 'esqueciSenha']);
    

//profissionais
Route::post('criarProfissional', [ProfissionalController::class, 'criarProfissional']);
Route::post('Profissional',[ProfissionalController::class, 'pesquisaPorNome']);
Route::post('celularProfissional',[ProfissionalController::class, 'pesquisaCelular']);
Route::post('cpfProfissional',[ProfissionalController::class, 'pesquisaCPF']);
Route::post('emailProfissional',[ProfissionalController::class, 'pesquisaEmail']);
Route::delete('deleteProfissional/{id}',[ProfissionalController::class, 'exclui']);
Route::put('updateProfissional', [ProfissionalController::class, 'update']);