@extends('layouts.app')
@section('title','Categorias')
@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div class="card-header">
            <h2 class="card-title">Categorias</h2><br>
            <a href="{{route('categoria.create')}}" class="btn btn-success float-left">Incluir</a>
        </div>
    </div><br>
     <table class="table">
     <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Alterar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbory>
        @forelse($categorias as $categoria)
        <tr>
            
            <td>{{$categoria->nome}}</td>
            <td>{{$categoria->descricao}}</td>
            <td>
                <form action="{{route('categoria.edit',['id' => $categoria->id])}}" method="get">
                    <input class="btn btn-secondary" type="submit" value="Alterar">
                </form>
            </td>
            <td>
                <form action="{{route('categoria.destroy',['id' => $categoria->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Excluir">
                </form>
            </td>
        </tr>
    </tbory>
        @empty
            <tr>
                <th colspan="2">Nenhum registro</th>
            </tr>
        @endforelse
        </div>
</div>
    @endsection
        
