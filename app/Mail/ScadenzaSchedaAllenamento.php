<?php

namespace App\Mail;

use App\Models\Schedallenamento;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use phpDocumentor\Reflection\Types\This;

class ScadenzaSchedaAllenamento extends Mailable
{
    use Queueable, SerializesModels;

    public $scheda;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Schedallenamento $scheda)
    {
        $this->scheda = $scheda;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Scadenza Scheda Allenamento ------> '.$this->scheda->user->nome.' '.$this->scheda->user->cognome,
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
            markdown: 'emails.scheda.allenamento.scadenza',
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
