<?php

namespace Edumepro\Aymancontact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $fillable = ['name', 'phone', 'message', 'ip', 'city', 'region', 'region_code', 'country_code', 'country_name', 'continent_code', 'continent_name', 'latitude', 'longitude', 'location_accuracy_radius', 'timezone', 'currency_code', 'currency_symbol', 'currency_symbol_utf8', 'currency_converter'];

    # Relationship definitions
    public function contact()
    {
        //  $this->hasMany('App\Phone')
        // $this->hasMany('App\User');# i will assume this
        // $this->hasMany('Edumepro\Aymancontact\models\Contact');
    }


}
