<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'mdl_user';

    /*
     * Belongs to Categoria
     */
    public function Usuario(){
        return $this->belongsTo(Usuario::class);
    }    
}
