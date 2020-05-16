<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class participate extends Mailable
{
    use Queueable, SerializesModels;

    public $participate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
   public function __construct($participate)
    {
        //
        $this->participate = $participate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.participate.participates');
    }
}
