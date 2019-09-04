<?php

# we need to add the following to the package to make controller works fine
namespace Edumepro\Aymancontact\Http\Controllers;

use App\Http\Controllers\Controller;
# To Use the Model
use Edumepro\Aymancontact\mail\aymancontactMail;
use Edumepro\Aymancontact\models\Aymancontact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        //dump('AymancontactController INDEX');

        $allmessages = Aymancontact::all();

        if ($allmessages->count() > 0) {
            return view('Aymancontact::index', ['allmessages' => $allmessages]);
        } else {
            return "No records";
        }
        //return view('Aymancontact::index');
    }

    public function create()
    {
        # return the form for create .
        return view('Aymancontact::create'); # name of package without Provide name
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




}
