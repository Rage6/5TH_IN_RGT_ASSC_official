<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceEmail extends Mailable
{
    use Queueable, SerializesModels;

    // public $data;
    // public $new_content;
    public $new_invoice;
    public $email_title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct($data)
    // public function __construct($new_content)
    public function __construct($new_invoice, $email_title)
    {
        // $this->data = $data;
        // $this->email_content = $new_content;
        $this->invoice = $new_invoice;
        $this->subject = $email_title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      // $address = 'nicholas.vogt2017@gmail.com';
      // $subject = 'This is a demo!';
      // $name = 'Nicholas Vogt';

      // return $this->from($this->new_email)
      return $this->view('emails.invoice')
                  ->subject($this->subject)
                  ->with([ 'content' => $this->invoice ]);
    }
}
