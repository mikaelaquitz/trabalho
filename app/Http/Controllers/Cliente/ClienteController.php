<?php

namespace App\Http\Controllers\Cliente;

use App\Models\User;
use App\Models\Evento;
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        //dd($request);        
        if (empty($request->data) || empty($request->categoria)){
            return back()->withInput();
        }
        else
            {
                $eventos = Evento::Where('id_categoria',$request->categoria)->where('data','>', $request->data)->get();
                return view('cliente.index', compact('eventos'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= Categoria::all();
        
        return view('evento.create', compact('data')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd($request);
        if (empty($request->nome) || empty($request->data)|| empty($request->assentos)||empty($request->categoria)){
            return back()->withInput();
        }else{
            $data =$request->all();
            $evento = new Evento();
            $evento->nome = $data['nome'];
            $evento->data =$data['data'];
            $evento->qtd_assentos = $data['assentos'];
            $evento->id_categoria = $data['categoria'];
            $evento->ingressos_disponiveis = $data['assentos'] ;
            $evento->ingressos_vendidos = 0;
            $evento->save();
       
        }
        //var_dump($request);
        return redirect()->route('evento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::Where('id',$id)->first();
        
        return view('evento.show',['evento'=>$evento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::Where('id',$id)->first();
        $data = Categoria::all();
        if(!empty($evento)){
            return view('evento.edit', compact('data'), ['evento'=>$evento]);
        }
        else
        return redirect()->route('evento.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
        $evento = Evento::Where('id',$id)->first();
        $data=[
            'nome' => $request->nome,
            'data' => $request->data,
            'qtd_assentos'=> $request->assentos,
            'id_categoria'=>$request->categoria,
            'ingressos_disponiveis' => ($request->assentos - $evento->ingressos_vendidos)
        ];
        $evento->update($data);
        return redirect()->route('evento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect()->route('evento.index');
    }
}
