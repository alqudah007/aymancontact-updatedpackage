<?php

# we need to add the following to the package to make controller works fine
namespace Edumepro\Aymancontact\Http\Controllers;
# To Use the Model / email
use Edumepro\Aymancontact\mail\aymancontactMail;
use Edumepro\Aymancontact\models\Aymancontact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class AymancontactController extends Controller
{
    public function __construct()
    {
        //dump('AymancontactController Constructor called');
    }

    public function index()
    {
        # dump('AymancontactController INDEX');
        $allcontacts = Aymancontact::all();
        #return $this->get_user_ip();

        return view('Aymancontact::admin.index', ['allcontacts' => $allcontacts]);


    }

    public function create()
    {
        # return the form for create .
        return view('Aymancontact::create'); # name of package :: name of view
    }


    public function store(Request $request)
    {
        // return $request->all();

        # post to this from form
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'message' => 'required',
        ]);
        //dd(config('app.timezone'));
        //dump(config('aymancontactconfig.send_email_to_var'));
        //dd(config('aymancontactconfig.send_email_to_var'));


        Aymancontact::create($request->all());


        # when use config we need to add the config file name
        mail::to(config('aymancontactconfig.send_email_to_var'))->send(new aymancontactMail($request->all()));

        return response()->redirectToRoute('aymancontact.index');
    }


    public function get_user_ip()
    {

        $userip = \Request::ip();

        $guzzleclient = new Client();

        $response = $guzzleclient->post('http://www.geoplugin.net/json.gp?ip=' . $userip);

        return json_decode($response->getBody(), true); // json_decode --> convert json string to array
    }


}
