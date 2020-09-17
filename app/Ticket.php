<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
     protected $fillable = [
        'name','price','event_id',
    ];
    public function venue()
    {
    	return $this->belongsTo('App\Ticket');
    }

     public function event(){
    	return $this->belongsTo('App\Event');
    }
}
