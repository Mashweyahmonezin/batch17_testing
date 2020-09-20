<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable=['voucherno','orderdate','status','total','user_id'];
// oreder_item
    public function tickets()
    {
    	return $this->belongsToMany('App\Ticket','order_detail')
    				->withPivot('qty')
    				->withTimestamps();
    }

    

    public function user()
    {
    	return $this->belongsTo('App\User');
    				
    }
}
