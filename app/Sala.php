<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['name','url', 'ceo', 'cantidad', 'operando1', 'operando2', 'operando3','operando4','operando5','operando6','operando7','operando8','operando9','operador1','operador2','operador3','operador4','operador5','operador6','operador7','operador8','operador9'];

	public function getRouteKeyName()
	 {
		return 'url';
	 }




}
