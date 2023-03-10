<?php

namespace App\Mail;

use App\Models\Richiesta;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RichiestaShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $richiesta;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Richiesta $richiesta)
    {
        $this->richiesta = $richiesta;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Richiesta Cliente',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.richiesta.shipped',
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
