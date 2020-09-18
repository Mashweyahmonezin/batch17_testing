<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;
use App\Event;
use App\Ticket;

class PageController extends Controller
{
    public function main($value=''){
    	return view('frontend.main');
    }
    public function backfun($value='')
    {
    	return view('backend.main');
    }
    public function frontfun($value='')
    {
    	return view('frontend.main');   
    }
    // public function singerfun($value='')
    // {
    // 	return view('frontend.singer');
    // }
    // public function schedulefun($value='')
    // {
    // 	return view('frontend.schedule');
    // }
    public function eventfun($id)

    {
        $events=Event::where('venues_id',$id)->get();
    	return view('frontend.event',compact('events'));
    }
    public function venuefun($value='')
    {
        $venues=Venue::all();
    	return view('frontend.venue',compact('venues'));
    }
    public function buyticket($id)
    {
        $tickets=Ticket::where('event_id',$id)->get();
    	return view('frontend.buyticket',compact('tickets'));
    }
    public function loginfun($value=''){
        return view('frontend.login');
    }
    public function ticketfun($value='')
    {
       return view('frontend.ticketlist');
    }
}
