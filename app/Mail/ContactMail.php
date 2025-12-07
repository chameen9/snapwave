<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

     public $name, $contact, $date, $message, $email, $mailStatus;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $contact, $date, $message, $mailStatus)
    {
        $this->name = $name;
        $this->email = $email;
        $this->contact = $contact;
        $this->date = $date;
        $this->message = $message;
        $this->mailStatus = $mailStatus;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if($this->mailStatus == "System"){
            $subject = "New Contact Message from ".$this->name;
        } else {
            $subject = "Copy of your message to SnapWave";
        }

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'Mails.ContactMail',
            with: [
                'name' => $this->name,
                'message' => $this->message,
                'contact' => $this->contact,
                'date' => $this->date,
                'email' => $this->email,
            ]
        );
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
