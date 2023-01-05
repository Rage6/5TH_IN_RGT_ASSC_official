<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReunionEmail extends Mailable
{
    use Queueable, SerializesModels;

    // public $data;
    // public $new_content;
    public $new_submission;
    public $new_email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct($data)
    // public function __construct($new_content)
    public function __construct($new_submission)
    {
        // $this->data = $data;
        // $this->email_content = $new_content;
        $this->submission = $new_submission;
        $this->new_email = $new_submission->email;
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
      return $this->view('emails.reunion')
                  ->subject("Reunion Registration Submitted")
                  ->with([ 'content' => $this->submission ]);
    }
}
