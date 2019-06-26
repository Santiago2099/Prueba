<?php

namespace Prueba;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function articulo(){
		return $this->belongsTo('Prueba\Categoria');
	}
}
