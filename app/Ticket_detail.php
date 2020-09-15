<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket_detail extends Model
{
    protected $fillable = [
       	'id','user_id','event_id','ticket_id'
    ];
    public function venue()
    {
    	return $this->hasMany('App\Ticket_detail');
    }
}
