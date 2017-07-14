<?php

namespace App;

use App\Stop;

class Stop extends Model
{

	//Access tour information from any stop
    public function tour() {
    	return $this->belongsTo('App\Tour');
    }
}
