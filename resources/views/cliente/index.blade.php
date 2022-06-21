@extends('layouts.app')
@section('title','Categorias')
@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div class="card-header">
            <h2 class="card-title">Escolhendo evento</h2><br>    
        </div>
    </div><br>
     <table class="table">
     <thead>
        <tr>
            <th>Nome</th>
            <th>Data</th>
            <th>Categoria</th>
            <th>Ingressos disponíveis</th>
            <th>Cadastrar</th>
        </tr>
    </thead>
    <tbody>
        @forelse($eventos as $evento)
        <tr>
            <td>{{$evento->nome}}</td>
            <td>{{$evento->data}}</td>
            <td>{{$evento->id_categoria}}</td>
            <td>{{$evento->ingressos_disponiveis}}</td>
            @if($evento->ingressos_disponiveis > 0)
                <th><a href="{{route('bilhete.create',['id' => $evento->id])}}" class="btn btn-success ">Cadastrar no evento</a></th>
            
            @else
            <th><button type="button" class="btn btn-success" disabled>Cadastrar no evento</button></th>
            @endif
            @empty
            <tr>
                <th colspan="2">Nenhum registro</th>
            </tr>
        @endforelse
    </tbody>
    @endsection
        
