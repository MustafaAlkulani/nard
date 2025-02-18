<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminResetPassword extends Mailable
{
    use Queueable, SerializesModels;
  protected $data=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data=[])
    {
        $this->data=$data;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('admin.email.admin_reser_password')
            ->subject('Reser Admin Acount ')
            ->with('data',$this->data);
    }
}
