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
    public $customer_data;
    public $new_invoice;
    public $total_costs;
    public $follow_up_list;
    public $email_title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer_data, $new_invoice, $total_costs, $email_title, $follow_up_list)
    {
        // $this->data = $data;
        $this->customer = $customer_data;
        $this->invoice = $new_invoice;
        $this->totals = $total_costs;
        $this->follow_up_list = $follow_up_list;
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
                  ->with([ 'customer' => $this->customer, 'content' => $this->invoice, 'totals' => $this->totals, 'staff_list' => $this->follow_up_list]);
    }
}
