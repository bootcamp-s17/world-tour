<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tour;
use App\Stop;

class Stop extends Model {

   public function tour () {
         // return $this->belongsTo('App\Tour');
         return $this->belongsTo(Tour::class);
   }

}
