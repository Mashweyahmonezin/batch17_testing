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

Route::get('/', 'PageController@main')->name('mainpage') ;
// {
	
//     return view('welcome');
//     //return 'Hello Laravel';
// });

Route::get('main','PageController@backfun')->name('backendpage');
Route::get('front','PageController@frontfun')->name('frontpage');
Route::get('singer','PageController@singerfun')->name('singerpage');
Route::get('schedule','PageController@schedulefun')->name('schedulepage');
Route::get('event','PageController@eventfun')->name('eventpage');
Route::get('venue','PageController@venuefun')->name('venuepage');
Route::get('buyticket','PageController@buyticket')->name('buyticketpage');






