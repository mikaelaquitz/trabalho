@extends('layouts.app')
@section('title','Categorias')
@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div class="card-header">
            <h2 class="card-title">Detalhes do Evento</h2>
        </div>
    </div><br>
        <form action="{{route('bilhete.show',['id' => $evento->id])}}" method="get">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ingressos Vendidos</th>
                    <th scope="col">Ingressos Disponíveis</th>
                </tr>
            </thead>
            <tbory>    
                <tr>
                    <td>{{$evento->nome}}</td>
                    <td>{{$evento->data}}</td>
                    <td>{{$evento->ingressos_vendidos}}</td>
                    <td>{{$evento->ingressos_disponiveis}}</td>            
                </tr>
            </tbory>
            </table>
        </form>
    </div>
</div>
@endsection