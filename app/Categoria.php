<?php

namespace Prueba;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    public function categoria(){
		return $this->hasMany('Prueba\Articulo');
	}
}
