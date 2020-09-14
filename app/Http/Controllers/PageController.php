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
}
