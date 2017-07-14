<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stop extends Model
{
    use SoftDeletes;


    protected $dates = ['deleted_at'];

    public function tour() {
    	return $this->belongsTo('\App\Tour');
    }
}
