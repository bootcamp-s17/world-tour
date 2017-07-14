<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stops extends Model
{
    public function tours() {
      return $this->belongsTo('App\tours');
    }
}
