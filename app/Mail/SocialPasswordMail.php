<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SocialPasswordMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;


    public $name;
    public $pass;
    /**
     * Create a new message instance.
     *
     * @return void
     * 
     * 
     */
    public function __construct($name , $pass)
    {
        $this->name = $name;
        $this->pass = $pass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'))
        ->subject('Login Credentials '.env('APP_NAME'))
       ->view('emails.social-password');
    }
    
}
