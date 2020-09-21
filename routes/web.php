<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'PageController@main')->name('mainpage') ;
// {
	
//     return view('welcome');
//     //return 'Hello Laravel';
// });

Route::middleware('auth')->group(function(){

	Route::get('main','PageController@backfun')->name('backendpage');
	Route::resource('venues','VenueController');
	Route::resource('tickets','TicketController');
	Route::resource('events','EventController');
	Route::resource('sponsors','SponsorController');
	Route::resource('orders','OrderController');


});


Route::get('front','PageController@frontfun')->name('frontpage');
 Route::get('contact','PageController@contactfun')->name('contactpage');

// Route::get('singer','PageController@singerfun')->name('singerpage');
// Route::get('schedule','PageController@schedulefun')->name('schedulepage');
Route::get('event/{id}','PageController@eventfun')->name('event');
Route::get('/','PageController@venuefun')->name('venuepage');
Route::get('buyticket/{id}','PageController@buyticket')->name('buyticket');



Route::get('loginform','PageController@loginfun')->name('loginform');
Route::get('registerform','PageController@registerfun')->name('registerform');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('ticketlist','PageController@ticketfun');