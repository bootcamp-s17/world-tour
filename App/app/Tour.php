<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    
    public function stops(){
    $this->hasMany('App\Stop');
    }
}
