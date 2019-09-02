<?php
namespace  Edumepro\Aymancontact\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//OK
Route::get('/pkg', function () {
    return view('Aymancontact::index'); # we need the nameofpackage::theviewname
});




route::group(['namespace' => 'Edumepro\Aymancontact\Http\Controllers'], function () {
    route::get('/call','AymancontactController@index')->name('aymancontact.index');
    route::POST('/store','AymancontactController@store')->name('store');
    route::GET('/create','AymancontactController@create')->name('create');
    route::GET('/address','AymancontactController@address')->name('address');
    route::GET('/address2','AymancontactController@address2')->name('address2');
    route::GET('/address3','AymancontactController@address3')->name('address3');

});

// This to distinguish the app route to package route
Route::namespace('Edumepro\Aymancontact\Http\Controllers')->group(function () {
    route::GET('/namespace', function (Request $request) {
        dd($request->route()); //OK


    });
});
