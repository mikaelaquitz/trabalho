@extends('layouts.app')
@section('title','Categorias')
@section('content')    
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div class="card-header">
            <h2 class="card-title">Eventos Cadastrados</h2><br>
            <a href="{{route('evento.create')}}" class="btn btn-success float-left">Incluir</a>
     </div>
</div><br>
     <table class="table">
     <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade de Ingressos</th>
            <th scope="col">Alterar</th>
            <th scope="col">Excluir</th>
            <th scope="col">Detalhes</th>
        </tr>
    </thead>
        @forelse($eventos as $evento)
    <tbory>
        <tr>       
            <td>{{$evento->nome}}</td>
            <td>{{$evento->data}}</td>
            <td>{{$evento->id_categoria}}</td>
            <td>{{$evento->qtd_assentos}}</td>
            <td>
                <form action="{{route('evento.edit',['id' => $evento->id])}}" method="get">
                    <input class="btn btn-secondary" type="submit" value="Alterar">
                </form>
            </td>
            <td>
                <form action="{{route('evento.destroy',['id' => $evento->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Excluir">
                </form>

            </td>
            <td>
                <form action="{{route('evento.show',['id' => $evento->id])}}" method="get">
                    @csrf
                    <input class="btn btn-primary" type="submit" value="Detalhes">
                </form>
            </td>
        </tr>
        </tbory>
        @empty
        <tbory>
            <tr>
                <th colspan="2">Nenhum registro</th>
            </tr>
        </tbory>
        @endforelse
    @endsection
        
