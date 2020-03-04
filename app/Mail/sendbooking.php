<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class sendbooking extends Mailable
{
    use Queueable, SerializesModels;
   public $name;
   public $data;
   public $roomdata;
   public $id;
   public $booking;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$data,$roomdata,$id,$booking)
    {
        $this->name=$email;
        $this->data=$data;
        $this->roomdata=$roomdata;
        $this->id=$id;
        
        $this->booking=$booking;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // auth()->user()->email
        return $this->view('email.booking')->to($this->name)->from('info@cvc.vacations','Cadence-vacations')->subject('Booking verification');
    }
}
