<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaFormRequest extends FormRequest
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
    {
        return [
            'profissional' => 'required|',
            'cliente' => '|integer',
            'servico'  => '|integer',
            'data_hora' => 'required|date',
            'pagamento' => 'required|max:20|min:3',
            'valor' => 'required|decimal:2,4'
        ];

    
    }
}
