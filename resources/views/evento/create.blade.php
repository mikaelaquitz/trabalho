@extends('layouts.app')
@section('title',)
@section('content')


<div  style="padding-left:30%">
<div class="card text-center" style="width:50%">
  <div class="card-header">
  <h3 class="card-title">Inserindo Evento</h3>
  </div>
  <div class="card-body" >
    <form action="{{route('evento.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome"><b>Nome do Evento:</b></label>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nome" id="nome" value="{{old('nome')}}">
        </div>
        <br>
        <div class="form-group">
            <label for="data"><b>Data:</b></label><br>
            <input  type="date" id="data" name="data" value="{{old('data')}}" style="width:100%">
        
        </div>
        <br>
        <div class="form-group">
            <label for="assentos"><b>Número de assentos:</b></label>
            <input  type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="assentos" id="assentos" value="{{old('qtd_assentos')}}">
        </div>
        <div class="form-group">
            <label for="categoria"><b>Categoria: </b></label>
           
            <select class="form-select " id="categoria" name="categoria">
            @foreach($data as $categoria)
                <option id="categoria" value="{{$categoria->id}}" name="categoria">{{$categoria->nome}}</option>
            @endforeach
            </select> 
            
        </div>
        <br>
        <div class="form-group">
    
        <br>
        <button class="btn btn-lg btn-success">Adicionar evento</button>

    </form>
</div>
@endsection
