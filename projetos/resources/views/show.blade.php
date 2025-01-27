@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        @php
            $projeto->find($projeto->id);
        @endphp
        Nome: {{$projeto->nome}}<br>
        Descrição: {{$projeto->descricao}}<br>
        Data:  {{$projeto->data}}<br>
        Status: {{$projeto->status}} <br>
    </div>  
@endsection