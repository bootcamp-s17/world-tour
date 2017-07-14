<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tour extends Model
{
    use SoftDeletes;


    protected $dates = ['deleted_at'];

    public function stop() {
    	return $this->hasMany('\App\Stop');
    }
}
