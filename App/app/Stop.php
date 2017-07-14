<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    public function tours(){
    $this->belongsTo('App\Tour');
    }
}
