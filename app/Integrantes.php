<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrantes extends Model
{
    public function getRouteKeyName()
	 {
		return 'url';
	 }
}
