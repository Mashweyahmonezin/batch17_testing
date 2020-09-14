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

Route::get('/', function () {
	
    return view('welcome');
    //return 'Hello Laravel';
});



Route::get('/testing',function($value=''){
	return 'This is a testing page!';

});



Route::get('admin', function () {
    return view('backendtemplate');
    //return 'Hello Laravel';
});

Route::get('/testing',function ($value=''){
	return 'This is a testing page!';
});



Route::resource('students','StudentController');



