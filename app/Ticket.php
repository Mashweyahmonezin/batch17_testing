<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
     protected $fillable = [
        'name',
    ];
    public function venue()
    {
    	return $this->belonsTo('App\Ticket');
    }
}
