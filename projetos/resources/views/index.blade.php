@extends('templates.template')
@section('content')
<h1 class="text-center">Projetos</h1>
<br>
<div class="col-8 m-auto">
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Data</th>
      <th scope="col">Status</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
   @foreach($projeto as $projetos)
    <tr>
      <th scope="row">{{$projetos->id}}</th>
      <td>{{$projetos->nome}}</td>
      <td>{{$projetos->descricao}}</td>
      <td>{{$projetos->data}}</td>
      <td>{{$projetos->status}}</td>
      <td>
          <a href="{{url("projetos/$projetos->id")}}">
            <button class="btn btn-dark">Visualizar</button>
         </a>
         <a href="">
            <button class="btn btn-warning">Editar</button>
         </a> 

         <a href="">
            <button class="btn btn-danger">Excluir</button>
         </a> 
     </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
        <div class="text-center mt-3 mb-4">
                <a href="{{url("projetos/create")}}">
                    <button class="btn btn-success">Cadastrar</button>
                </a>
        </div>
           
@endsection()