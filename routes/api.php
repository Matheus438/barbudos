<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\ServicoController;
use App\Http\Requests\ProfissionalFormRequest;
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
Route::post('nomeserviço',[ServicoController::class, 'pesquisaPorNome']);
Route::delete('deletar/{id}',[ServicoController::class, 'excluir']);
Route::put('atualizacao', [ServicoController::class, 'update']);
Route::get('retornarTodos', [ServicoController::class, 'retornarTodos']);
Route::get('pesquisarId/{id}', [ServicoController::class, 'pesquisarId']);
//cliente
Route::post('criarCliente', [ClienteController::class, 'criarCliente']);
Route::get('nome',[ClienteController::class, 'pesquisaPorNome']);
Route::get('celular',[ClienteController::class, 'pesquisaCelular']);
Route::get('cpf',[ClienteController::class, 'pesquisaCPF']);
Route::get('email',[ClienteController::class, 'pesquisaEmail']);
Route::delete('delete/{id}',[ClienteController::class, 'exclui']);
Route::put('update', [ClienteController::class, 'update']);
Route::put('esqueciSenha',[ClienteController::class, 'esqueciSenha']);
Route::get('retornarTudo', [ClienteController::class, 'retornarTudo']);
Route::get('pesquisaId/{id}', [ClienteController::class, 'pesquisaId']);

//profissionais
Route::post('criarProfissional', [ProfissionalController::class, 'criarProfissional']);
Route::get('Profissional',[ProfissionalController::class, 'pesquisaPorNome']);
Route::get('celularProfissional',[ProfissionalController::class, 'pesquisaCelular']);
Route::get('cpfProfissional',[ProfissionalController::class, 'pesquisaCPF']);
Route::get('emailProfissional',[ProfissionalController::class, 'pesquisaEmail']);
Route::delete('deleteProfissional/{id}',[ProfissionalController::class, 'exclui']);
Route::put('updateProfissional', [ProfissionalController::class, 'update']);
Route::get('retornartodosProfissionais', [ProfissionalController::class, 'retornartodosProfissionais']);
Route::get('pesquisaPorId/{id}', [ProfissionalController::class, 'pesquisaPorId']);

//agenda
Route::post('criarAgenda', [AgendaController::class, 'criarAgenda']);
Route::post('pesquisarAgendaNome',[AgendaController::class, 'pesquisarAgendaNome']);
Route::get('mostrarTodos', [AgendaController::class, 'mostrarTodos']);
Route::delete('delete/{id}',[AgendaController::class, 'excluiAgenda']);
Route::put('updateAgenda', [ClienteController::class, 'updateAgenda']);