<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function singerfun($value='')
    {
    	return view('frontend.singer');
    }
    public function schedulefun($value='')
    {
    	return view('frontend.schedule');
    }
    public function eventfun($value='')
    {
    	return view('frontend.event');
    }
    public function venuefun($value='')
    {
    	return view('frontend.venue');
    }
    public function buyticket($value='')
    {
    	return view('frontend.buyticket');
    }
}
