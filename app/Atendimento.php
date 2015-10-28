<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
	protected $fillable = ['usuario','assunto','comentario'];

    /*
     * Belongs to Categoria_ped
     */
    public function Categoria_ped(){
        return $this->belongsTo(Categoria_ped::class);
        }	

}