<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendJobMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mess;

    public function __construct($mess)
    {
        return $this->mess = $mess;
    }

    public function build()
    {
        return $this->subject('Your Job Suggested '. $this->mess['subject'])
            ->view('emails.message', ['mess' => $this->mess]);
    }
}
