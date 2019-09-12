<?php

namespace Edumepro\Aymancontact\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes for : Admin part of the Aymancontact Package
|--------------------------------------------------------------------------
|
*/


/*
|--------------------------------------------------------------------------
| Web Routes : This to distinguish the app route to package route
|--------------------------------------------------------------------------
| we use name space to make the route of the package clean as possible
| note we have two ways to make the namespace :
|
| A: route::group(['namespace'=>''],function(){});
| B: route::namespace('')->group(function(){});
|
*/

# A : route::group       in PKG in need web to make validation route $erros available to see in blade
route::group([
    'namespace' => 'Edumepro\Aymancontact\Http\Controllers',
    'middleware' =>['bindings','web']

    ], function () {
    // Contact full routes with name like: contact.index
    // Better to have small case character  in route name- route is case sensitive
    # route model binding  in package must be explicity declare through middleware
    Route::Resource('contact', 'ContactController');#->middleware('bindings')#->except('show');

    Route::post('contact/{contact}/answer','AnswerController@store')->name('answer.store');



    # HERE MAP REST API
    Route::get('/here-map-api', function(){
        $url = 'https://geocoder.api.here.com/6.2/geocode.json?searchtext=amman&app_id=5fNq0dC2PE2SMgBEOJFu&app_code=DG21ynorSUitG7LPFL11gA';
        $guzzleclient = new Client();
        $response = $guzzleclient->get($url);
        return json_decode($response->getBody(),true) ;//getBody is GUZZZLE method
    });

    # HERE MAP REST API
    Route::get('/google-map-js-api', function(){

        return view('welcome') ;//getBody is GUZZZLE method
    });




    // Admin route - index all the contacts
    Route::get('/contacts', 'AymancontactController@index');
    route::get('/call', 'AymancontactController@index')->name('aymancontact.index');
    route::POST('/store', 'AymancontactController@store')->name('store');
    route::GET('/create', 'AymancontactController@create')->name('create');


});

# B : route::namespace
/*
  Route::namespace('Edumepro\Aymancontact\Http\Controllers')->group(function () {
    route::GET('/namespace', function (Request $request) {
        dd($request->route()); //OK


    });
});

*/
