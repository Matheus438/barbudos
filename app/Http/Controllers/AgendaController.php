<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendaFormRequest;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function criarAgenda(AgendaFormRequest $request)
    {
        $agenda = Agenda::create([
            'cliente' => $request->cliente,
            'profissional' => $request->profissional,
            'dataehora' => $request->dataehora,
            'servico' => $request->servico,
            'pagamento' => $request->pagamento,
            'valor' => $request->valor
        ]);

        return response()->json([
            "success" => true,
            "message" => "cliente cadastrado",
            "data" => $agenda
        ], 200);
       
    }
    
    public function pesquisarAgendaNome(Request $request)
    {
        $agenda= Agenda::where('cliente', 'like', '%' . $request->cliente . '%')->get();

        if (count($agenda)>0) {
            return response()->json([
                'status' => true,
                'data' => $agenda

            ]);
        }
        return response()->json([
            'status' => false,
            "message" => "nada foi emcontrado com o nome procurado",
            'data' => $agenda
        ]);
    }
    public function mostrarTodos(){
        $agenda = Agenda::all();
        
        if (count($agenda)==0){
            return response()->json([
                'status'=> false,
                'message'=> "nenhum dado encontrado,"
            ]);
        }
        return response()->json([
            'status'=> true,
            'data'=> $agenda
        ]);
    }
}

