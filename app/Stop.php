<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tour;
use App\Stop;

class Stop extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['tour_id', 'date','location'];


    public function tours() {
    	$this->belongsTo('Tour');
    }
}
