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

// Route::get('/', function () {
//     return 'hello';///view('welcome');
// });


// Route::get('/','PagesController@index');
// Route::get('about','PagesController@about');

// Route::get('about',function(){
    
    
//     return 'about';
// }






// );

Route::model('song', 'App\Song');

Route::get('songs', 'SongsController@index');

get('songs/{song}', 'SongsController@show');



