<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'data',
        'id_user',
        'id_evento',
        'numero_assento',
        'num_assento'
    ];
    public function user(){
        
        return $this->belongsTo(User::class);
       
    }
    
}
