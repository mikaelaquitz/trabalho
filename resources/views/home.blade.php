@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 offset-md-3" style="width:40%">
        <h1 class="text-center">Seja bem vindo!</h1><br>

        <h3 class="text-center">Esta buscando algum evento perdo de você? </h3><br>
        <h5 class="text-center">Basta selecionar um tipo de evento,<br> e uma data para visualizar os eventos futuros.</h5><br><br>
            <div class="card text-center" >
                <div class="card-header" ><h2>Buscar eventos</h2></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('cliente.index')}}" method="get">
                    
                    <div class="form-group">
                        <label for="id_categoria"><b>Categoria:</b></label>
                        <!--<input type="text" name="id_categoria" id="id_categoria"value="{{old('id_categoria')}}"><select id="categoria" name="categoria">-->
                        <select class="form-select" id="categoria" name="categoria" placeholder="Selecione">  
                        @foreach($data as $categorias)
                            <option hidden >Selecione um tipo de evento</option> 
                            <option id="categorias" value="{{$categorias->id}}" name="categorias">{{$categorias->nome}}</option>
                        @endforeach
                        </select> 
                    </div>
                    <br>
                    <div class="form-group" >
                        <label for="data"><b>Data:</b></label>
                        <input style="width:100%"  type="date" id="data" name="data" value="{{old('data')}}">
                    </div>

                    <br>
                    <button class="btn btn-lg btn-success">Pesquisar</button><br>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
