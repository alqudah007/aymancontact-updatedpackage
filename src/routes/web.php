<?php
namespace  Edumepro\Aymancontact\Http\Controllers;
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

# A : route::group
route::group(['namespace' => 'Edumepro\Aymancontact\Http\Controllers'], function () {
    // Admin route - index all the contacts
    Route::get('/contacts','AymancontactController@index');

    route::get('/call','AymancontactController@index')->name('aymancontact.index');
    route::POST('/store','AymancontactController@store')->name('store');
    route::GET('/create','AymancontactController@create')->name('create');

});

# B : route::namespace
Route::namespace('Edumepro\Aymancontact\Http\Controllers')->group(function () {
    route::GET('/namespace', function (Request $request) {
        dd($request->route()); //OK


    });
});
