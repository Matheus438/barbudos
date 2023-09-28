<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProfissionalFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    { {
            return [
                'nome' => 'required|max:120|min:5',
                'celular' => 'required|max:11|min:10',
                'email' => 'required|max:120|unique:clientes,email' . $this->id,
                'cpf' => 'required|max:11|min:11|unique:clientes,cpf' . $this->id,
                'nascimento' => 'required|date',
                'cidade' => 'required|max:120',
                'estado' => 'required|max:2|min:2',
                'pais' => 'required|max:80',
                'rua' => 'required|max:120',
                'numero' => 'required|max:10',
                'bairro' => 'required|max:100',
                'cep' => 'required|max:8|min:8',
                'complemento' => 'max:150',
                'password' => 'required',
                'salario' => 'required|decimal'
            ];
        }
    }
    public function failedValidator(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }
    public function messages()
    {
        return [

            'nome.required' => 'O campo nome é obrigatorio',
            'nome.max' => 'o campo nome deve conter no maximo 120 caracteres',
            'nome.min' => 'o campo nome deve conter no minimo 5 caracteres',
            'celular.required' => 'O campo celular é obrigatorio',
            'celular.max' => 'o campo celular deve conter no maximo 11 caracteres',
            'celular.min' => 'o campo celular deve conter no minimo 10 caracteres',
            'email.unique' => 'o email ja foi cadastrado',
            'email.required' => 'este campo é obrigatorio',
            'email.max' => 'o campo email deve conter no maximo 120 caracteres',
            'cpf.unique' => 'esse cpf ja foi cadastrado',
            'cpf.required' => 'O campo cpf é obrigatorio',
            'cpf.max' => 'o campo cpf deve conter no maximo 11 caracteres',
            'cpf.min' => 'o campo cpf deve conter no minimo 11 caracteres',
            'nascimento.required' => 'O campo nascimento é obrigatorio',
            'nascimento.date' => 'O campo nascimento deve ser uma data válida',
            'cidade.required' => 'o campo cidade é obrigatorio',
            'cidade.max' => 'deve conter no maximo 120 caracteres',
            'estado.required' => 'o campo estado é obrigatorio',
            'estado.max' => 'deve conter no maximo 2 caracteres',
            'rua.required' => 'o campo rua é obrigatorio',
            'rua.max' => 'deve conter no maximo 120 caracteres',
            'numero.required' => 'o campo numero é obrigatorio',
            'numero.max' => 'deve conter no maximo 10 caracteres',
            'bairro.required' => 'o campo bairro é obrigatorio',
            'bairro.max' => 'deve conter no maximo 100 caracteres',
            'cep.required' => 'o campo cep é obrigatorio',
            'cep.max' => 'deve conter no maximo 8 caracteres',
            'cep.min' => 'o campo cpf deve conter no minimo 8 caracteres',
            'complemento.max' => 'deve conter no maximo 150 caracteres',
            'password.required' => 'o campo password é obrigatorio',
            'pais.required' => 'o campo pais é obrigatorio',
            'pais.max' => 'o campo pais deve conter no maximo 80 caracteres',


        ];
    }
}
