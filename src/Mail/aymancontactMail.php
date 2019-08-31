<?php

namespace Edumepro\Aymancontact\mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class aymancontactMail extends Mailable
{
    use Queueable, SerializesModels;


    #ِAyman add this

    public $name;
    public $mobile;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputsArray)
    {
        //
        $this->name=$inputsArray['name'];
        $this->mobile=$inputsArray['mobile'];
        $this->message=$inputsArray['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Aymancontact::mail.contact.useremail')->with([
            'name'=> $this->name,
            'mobile'=> $this->mobile,
            'message'=> $this->message,

        ]);
    }
}
