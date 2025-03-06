<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GahNotifEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $template = "emails.regular";

        if(array_key_exists("template", $this->data)) {
            $template = $this->data["template"];
        }

        $email = $this
                ->subject($this->data['subject'])
                ->view( $template, ["data" => $this->data] );

        if(array_key_exists("attachmentPath", $this->data)) {
            $email->attach($this->data["attachmentPath"]);
        }

        return $email;
    }
    
}
