<?php

# we need to add the following to the package to make controller works fine
namespace Edumepro\Aymancontact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Edumepro\Aymancontact\Models\Contact;
use Edumepro\Aymancontact\mail\aymancontactMail;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        # dump('AymancontactController INDEX');
        $allcontacts = Contact::all();
        #return $this->get_user_ip();

        return view('Aymancontact::admin.index', ['allcontacts' => $allcontacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        # return the form for create .
        return view('Aymancontact::contact.create'); # name of package :: name of view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request->all();

        # post to this from form
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        //dd(config('app.timezone'));
        //dump(config('aymancontactconfig.send_email_to_var'));
        //dd(config('aymancontactconfig.send_email_to_var'));


        Contact::create($request->all());


        # when use config we need to add the config file name
        mail::to(config('aymancontactconfig.send_email_to_var'))->send(new aymancontactMail($request->all()));

        return response()->redirectToRoute('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(\Edumepro\Aymancontact\Models\Contact $contact)
    {
        //dump($id);// this is OK ok
        dd($contact);// this is NOT Ok - ROUTE MODEL BINDING
        return view('Aymancontact::admin.show',['contact'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\contact $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\contact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\contact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
