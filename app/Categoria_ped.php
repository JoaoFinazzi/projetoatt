<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_ped extends Model
{
    /*
     * Belongs to Categoria_ped
     */
    public function Categoria_ped(){
        return $this->belongsTo(Categoria_ped::class);
        }	
}
