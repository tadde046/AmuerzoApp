<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['name','url', 'ceo'];

	public function getRouteKeyName()
	 {
		return 'url';
	 }




}
