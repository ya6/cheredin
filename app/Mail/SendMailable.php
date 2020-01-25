<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $name, $email, $message,
     $attributes;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        $this->attributes = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {$attributes = $this->attributes;
        return $this->view('mail.contactmail', compact('attributes'))
        ->subject('Mail from cheredin.stockup.by');
    }
}
