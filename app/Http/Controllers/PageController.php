<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

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
    public function eventfun($value='')
    {
    	return view('frontend.event');
    }
    public function venuefun($value='')
    {
        $venues=Venue::all();
    	return view('frontend.venue',compact('venues'));
    }
    public function buyticket($value='')
    {
    	return view('frontend.buyticket');
    }
}
