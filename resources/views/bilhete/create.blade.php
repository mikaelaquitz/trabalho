@extends('layouts.app')
@section('title',)
@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div class="card-header">
            <h2 class="card-title">Cadastrando em Eventos</h2>            
        </div>
    </div><br>
    <form action="{{route('bilhete.store')}}" method="post">
    @csrf
    <table class="table">
    <thead>
        <tr>
            <div class="form-group">
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Selecionar Lugar</th>
            <th scope="col">Confirmar Inscrição</th>
</div>
        </tr>
    </thead>
    <tbory>
        <tr>
            <input type="hidden" id="id_user" name="id_user" value="{{auth()->user()->id}}">
            <th>{{$evento->nome}}</th>
            <input type="hidden" id="id_evento" name="id_evento" value="{{$evento->id}}">
            <input type="hidden" name="nome" value="{{$evento->nome}}">
            <th><p >{{$evento->data}}</p></th>
            <input type="hidden" id="data" name="data" value="{{$evento->data}}">
            
            <th><select class="form-select" style="width: 120px" id="assento" name="assento">
                @for($i = 1 ; $i <= $evento->ingressos_disponiveis; $i++ )
                    <option hidden >Selecione </option> 
                    <option value={{$i}} name="assento">Assento - {{$i}} -</option>
                @endfor
                </select>
            <th>
                <input class="btn btn-success" type="submit" value="Confirmar">
            </th>
                
        </tr>
    </tbory>
        </table>
    </form>
</div>
@endsection