<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailEmployer extends Mailable
{
    use Queueable, SerializesModels;
    public $mess;

    public function __construct($mess)
    {
        return $this->mess = $mess;
    }

    public function build()
    {
        return $this->subject('Message from '. $this->mess['sender'])
            ->view('emails.employer', ['mess' => $this->mess]);
    }
}
