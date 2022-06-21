@extends('layouts.app')
@section('title','Edição')
@section('content')
<div  style="padding-left:30%">
<div class="card text-center" style="width:50%">
  <div class="card-header">
  <h3 class="card-title">Editando Evento</h3>
  </div>
  <div class="card-body">
    <form action="{{route('evento.update',['id' => $evento->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome do Evento:</label>
            <input style="width:100%" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nome" id="nome" value="{{$evento->nome}}">
        </div>
        <br>
        <div class="form-group">
            <label for="data">Data:</label>
            <input style="width:100%" type="date" id="data" name="data" value="{{$evento->data}}">
        </div>
        <div class="form-group">
            <label for="assentos">Número de assentos:</label>
            <input style="width:100%" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="assentos" id="assentos"value="{{$evento->qtd_assentos}}">
        </div>
        <div class="form-group">
            <label for="id_categoria">Categoria:</label>
           <!--<input type="text" name="id_categoria" id="id_categoria"value="{{$evento->id_categoria}}">-->
           <select style="width:100%" class="form-select " id="categoria" name="categoria">
            @foreach($data as $categoria)
                <option id="categoria" value="{{$categoria->id}}" name="categoria">{{$categoria->nome}}</option>
            @endforeach
            </select> 
        </div>
        <button class="btn btn-lg btn-success">Atualizar</button>

    </form>
</div>
@endsection
