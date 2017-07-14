<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tour;
use App\Stop;

class Tour extends Model
{
    public function stop () {
         // return $this->belongsTo('App\Tour');
         return $this->hasMany(Stop::class);
   }
}
