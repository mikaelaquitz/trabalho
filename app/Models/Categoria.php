<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome',
        'descricao'
    ];

    //definindo relacionamento 
    public function Eventos(){
        return $this ->hasMany(Evento::class);
    }
}
