@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar</h1> <hr>
    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{url('projetos/create')}}">

            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Projeto:" required><br>
            <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição do Projeto:" required><br>
            <input class="form-control" type="text" name="data" id="data" placeholder="Data do Projeto:" required><br>
            <input class="form-control" type="text" name="status" id="status" placeholder="status do projeto:" required><br>

            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection