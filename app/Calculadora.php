<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    public function getRouteKeyName()
	 {
		return 'url';
	 }
}

