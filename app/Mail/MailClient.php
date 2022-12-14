<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClient extends Mailable
{
    use Queueable, SerializesModels;

protected $infoMail = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $infomail)
    {
        $this->infoMail = $infomail;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {

        extract($this->infoMail);

        return new Envelope(
            subject: $motif,
            from: new Address('admin@avocatdurieux.com', $nom),
            replyTo: $expediteur,
            
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        extract($this->infoMail);

        return new Content(
            view: 'mailClient',
            with: [
                'messageClient'=>$messageClient,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
