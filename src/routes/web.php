<?php
namespace  Edumepro\Aymancontact\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//OK
Route::get('/pkg', function () {
    return view('Aymancontact::index'); # we need the nameofpackage::theviewname
});



// This to distinguish the app route to package route
route::group(['namespace' => 'Edumepro\Aymancontact\Http\Controllers'], function () {
    route::get('/call','AymancontactController@index')->name('aymancontact.index');
    route::POST('/store','AymancontactController@store')->name('store');
    route::GET('/create','AymancontactController@create')->name('create');

});

// This to distinguish the app route to package route
Route::namespace('Edumepro\Aymancontact\Http\Controllers')->group(function () {
    route::GET('/namespace', function (Request $request) {
        dd($request->route()); //OK


    });
});
