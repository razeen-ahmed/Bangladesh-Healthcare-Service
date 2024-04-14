<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public array $content;
    public $invoice;

    public function __construct(array $content, $invoice) {
        $this->content = $content;
        $this->invoice = $invoice;
    }

    public function build()
    {
        return $this->subject($this->content['subject'])
            ->view('emails.order_confirm',['content'=>$this->content, "invoice" => $this->invoice]);
    }
}
