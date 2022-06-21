@extends('layouts.app')
@section('title','Categorias')
@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div class="card-header">
            <h2 class="card-title">Bilhetes do Usuário</h2>            
        </div>
    </div><br>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">N° do Assento</th>
            <th scope="col">Cancelar</th>
            <th scope="col">Emitir</th>
        </tr>
  
    </thead>
    @foreach($bilhetes as $bilhete)
    
    <tbory>
        <tr>
            
            <th>{{$bilhete->nome}}</th>
            <th>{{$bilhete->data}}</th>
            <th>{{$bilhete->num_assento}}</th>            
            @if($Date = date('Y-m-d') < $bilhete->data ) 
                <th>
                    <form action="{{route('bilhete.destroy',['id' => $bilhete->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Cancelar"  class="btn btn-danger">
                    </form>
                </th>
            @else
                <th><input type="submit" value="Cancelar" class="btn btn-secondary" disabled></th>
            @endif
                
            <th>
                <form action="{{route('bilhete.index')}}" method="get">
                    <input type="submit" value="Emitir"  class="btn btn-primary">
                </form>
            </th>
        </tr>   
        
    </tbory>
    @endforeach
        
    </table>
</div>
</div>
@endsection