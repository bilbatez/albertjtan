<?php

namespace App\Mail;

use App\Sender;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;


    /**
     * SendMessage constructor.
     * @param Sender $sender Sender Object
     */
    public function __construct(Sender $sender)
    {
        $this->sender = $sender;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@albertjtan.com')
            ->subject("New Message from Your Website")
            ->view('emails.send-message');
    }
}
