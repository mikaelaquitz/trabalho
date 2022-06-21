<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Evento extends Model
{
    protected $fillable = [
        'nome',
        'data',
        'qtd_assentos',
        'id_categoria',
        'ingressos_disponiveis',
        'ingressos_vendidos',
        'num_assento' =>'array'
    ];

    public function Categoria(){
        
        return $this->belongsTo(Categoria::class);
       
    }
    public function Bilhete(){
        
        return $this->hasMany(Bilhete::class);
       
    }
}
