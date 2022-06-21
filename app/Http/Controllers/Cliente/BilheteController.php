<?php

namespace App\Http\Controllers\Cliente;

use App\Models\Bilhete;
use App\Models\Categoria;
use App\Models\Evento;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Casts\Attribute;


class BilheteController extends Controller
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
    public function create($id)
    {        
        $evento = Evento::Where('id', $id)->first();       
        $bilhete = Bilhete::Where('id_evento', $id)->get();
       

        return view('bilhete.create', compact('evento')); 
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
        if (empty($request->id_evento) || empty($request->data) ||empty($request->assento) ){
            return back()->withInput();
        }else{
            $data =$request->all();
            $bilhete =new Bilhete();
            $bilhete->id_evento = $data['id_evento'];
            $bilhete->num_assento = $data['assento'];
            $bilhete->id_user = $data['id_user'];
            $bilhete->nome = $data['nome'];
            $bilhete->data = $data['data'];
            $bilhete->save();            
        }   
        $evento = Evento::Where('id', $request->id_evento)->first(); 
        $evento->ingressos_disponiveis -= 1;
        $evento->ingressos_vendidos += 1;
        
        $evento->save();
        return  redirect()->route('home'); 
    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bilhete  $bilhete
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $bilhetes = Bilhete::Where('id_user', $id)->get();
      
       return view('bilhete.index', compact('bilhetes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bilhete  $bilhete
     * @return \Illuminate\Http\Response
     */
    public function edit(Bilhete $bilhete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bilhete  $bilhete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bilhete $bilhete)
    {
        //dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bilhete  $bilhete
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bilhete = Bilhete::findOrFail($id);
        $sum = Evento::findOrFail($bilhete->id_evento);
        $sum->ingressos_disponiveis += 1;
        $sum->ingressos_vendidos -= 1;
        $bilhete->delete();


        return redirect()->route('bilhete.index');
    }
}
