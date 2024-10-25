<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationForm extends Mailable
{
    use Queueable, SerializesModels;
    public $request;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail =  $this->from('najam@cruxcreativedemo2.com')
                    ->subject('Login Deatils')
                    ->markdown('emails.login-details');

         return $mail;
    }
}
