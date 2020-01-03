<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() 
    {
          if(session()->get('userrole')=='guardian'){
        return $this->from('shakilahmedzx@gmail.com')->subject('Tutor Request')->view('pages.email')->with('data',$this->data);}
        
         if(session()->get('userrole')=='tutor'){
        return $this->from('shakilahmedzx@gmail.com')->subject('Tuition Request')->view('pages.email_to_guardian')->with('data',$this->data);}
    }
}
