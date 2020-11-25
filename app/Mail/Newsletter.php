<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Newsletter extends Mailable
{
    use Queueable, SerializesModels;
    public $mess;

    public function __construct($mess)
    {
        return $this->mess = $mess;
    }
    public function build()
    {
        return $this->subject($this->mess['subject'].' From Trustgated Jobsite')
            ->view('emails.newsletter', ['data' => $this->mess]);
    }
}
