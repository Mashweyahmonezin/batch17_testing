<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $fillable = [
        'name','Date','start_time','end_time','venue_id'
    ];
    public function venue()
    {
    	return $this->belongsTo('App\Venue');
    }
}
