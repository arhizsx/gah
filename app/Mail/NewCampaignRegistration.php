<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;

use App\Models\CampaignRegistration;

class NewCampaignRegistration extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $mode;

    public function __construct(
        public CampaignRegistration $campaignRegistration,
        $mode
    )
    {
        $this->mode = $mode;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('arhizsx@gmail.com', 'Aris Salvador'),
            replyTo: [
                new Address('admin@globeathome.com', 'Administrator'),
            ],
            subject: 'New Application',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if($this->mode == "vendor"){
            return new Content(
                view: 'emails.new_campaign_registration',
            );

        }
        elseif($this->mode == "sgt"){
            return new Content(
                view: 'emails.sgt_new_campaign_registration',
            );

        }

    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
