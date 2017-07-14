<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tours extends Model
{
    public function stops() {
      return $this->hasMany('App\stops');
    }
}
