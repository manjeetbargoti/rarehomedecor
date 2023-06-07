<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Enquiry;

class QueryEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $query;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($query)
    {
        $this->query = $query;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Query from Rare Home Decor')->view('emails.query');
    }
}
