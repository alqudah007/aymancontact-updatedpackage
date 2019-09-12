<?php

namespace Edumepro\Aymancontact\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $fillable = ['name', 'phone', 'message', 'ip', 'city', 'region_name', 'region_code', 'country_code', 'country_name', 'continent_code', 'continent_name', 'latitude', 'longitude', 'location_accuracy_radius', 'timezone', 'currency_code', 'currency_symbol', 'currency_symbol_utf8', 'currency_converter'];

    # Relationship definitions
    public function answers()
    {
        //  $this->hasMany('App\Phone')
        // $this->hasMany('App\User');# i will assume this
     return   $this->hasMany('Edumepro\Aymancontact\models\Answer');
    }

    public function getUserGeoLocation()
    {

        #$userip = \Request::ip();
        #$userip ='51.253.62.96';
        #$userip ='72.52.87.190';
        #$userip ='102.173.6.240';
        #$userip ='73.149.246.87';
        #$userip ='37.17.207.255';
        #$userip ='103.248.176.0';
        $userip ='156.62.19.43';

        $guzzleclient = new Client();

        $response = $guzzleclient->post('http://www.geoplugin.net/json.gp?ip=' . $userip);

        return json_decode($response->getBody(), true); // json_decode --> convert json string to array
    }


    public function getmap(){

        $url = 'https://geocoder.api.here.com/6.2/geocode.json?searchtext=200%20S%20Mathilda%20Sunnyvale%20CA&app_id=5fNq0dC2PE2SMgBEOJFu&app_code=DG21ynorSUitG7LPFL11gA';
        $guzzleclient = new Client();
        $response = $guzzleclient->get($url);
        return $response;

    }


}
