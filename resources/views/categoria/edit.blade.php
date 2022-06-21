@extends('layouts.app')
@section('title','Edição')
@section('content')
<div  style="padding-left:30%">
<div class="card text-center" style="width:50%">
  <div class="card-header">
  <h3 class="card-title">Alterar Categoria</h3>
  </div>
  <div class="card-body">
    <form action="{{route('categoria.update',['id' => $categoria->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="">
        <div class="form-group">
            <label for="nome">Nome da categoria:</label>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nome" id="nome"  value="{{$categoria->nome}}">
        </div>
        <br>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="md-textarea form-control"  name="descricao" id="descricao" cols="10" >{{$categoria->descricao}}</textarea>
        </div>
        <br>
        <button class="btn btn-lg btn-success">Atualizar</button>
    </div>
    </form>
</div>
</div>
@endsection