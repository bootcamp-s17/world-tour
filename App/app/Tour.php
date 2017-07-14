<?php

namespace App;

use App\Tour;

class Tour extends Model
{
	//Access information from any stop on this tour
    public function stops() {
    	return $this->hasMany('App\Stop');
    }
}
