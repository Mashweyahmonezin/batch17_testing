<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
     protected $fillable = [
        'name','price'
    ];
    public function venue()
    {
    	return $this->belonsTo('App\Ticket');
    }

     public function events(){
    	return $this->belongsTo('App\Event');
    }
}
