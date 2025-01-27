@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($projeto)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">
            @if(isset($errors) && count($errors)>0)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">
                    @foreach($errors->all() as $erro)
                        {{$erro}}<br>
                    @endforeach
                </div>
            @endif

         @if(isset($projto))
         <form name="formEdit" id="formEdit" method="GET" action="{{url("projetos/$projetos->id")}}">
         @method('PUT')
        @else
        <form name="formCad" id="formCad" method="GET" action="{{url('projetos/create')}}">
        @endif
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Projeto:" value="{{$projeto->nome ?? ''}}" required><br>

            <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição do Projeto:" value="{{$projeto->descricao ?? ''}}" required><br>

            <input class="form-control" type="text" name="data" id="data" placeholder="Data do Projeto:" value="{{$projeto->data ?? ''}}" required><br>

            <input class="form-control" type="text" name="status" id="status" placeholder="status do projeto:" value="{{$projeto->status ?? ''}}"  required><br>

            <input class="btn btn-primary" type="submit" value="@if(isset($projeto)) Editar @else Cadastrar @endif">
        </form>
    </div>
@endsection