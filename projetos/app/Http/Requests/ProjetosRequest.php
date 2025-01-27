<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'=>'required|string',
            'descricao'=>'required|string',
            'data'=>'date',
            'status'=>'required|in:Pendente,Em Andamento,Concluído'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Coloque o nome!',
            'descricao.required'  => 'Coloque a descrição.',
            'data.required'  => 'Coloque a data.',
            'status.required'  => 'Coloque o Status: Pendente, Em Andamento ou Concluído.',

        ];
    }

}  

