<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
        'name','address','photo'
    ];
    public function events()
    {
    	return $this->hasMany('App\Event');
    }
}
