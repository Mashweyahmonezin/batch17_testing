<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
        'name','address'
    ];
    public function event()
    {
    	return $this->hasOne('App\Event');
    }
}
