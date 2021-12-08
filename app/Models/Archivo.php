<?php

namespace App\Models;
use App\Models\Usuario;


use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{

    //protected $table = 'Archivo';

    protected $fillable = [
        'curp',
     
    ];

    public function usuario()
    {
       return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
   
       

    }
    

}
