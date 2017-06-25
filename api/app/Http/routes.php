<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anshul', function () {
    echo "hello anshul";
});

Route::get('names', function()
{
    return response()->json(array(
      1 => "John",
      2 => "Mary",
      3 => "Steven"
    ));
});

Route::get('names/{id}', function($id)
{
    $names = array(
      1 => "John",
      2 => "Mary",
      3 => "Steven"
    );    
    return array($id => $names[$id]);
});
