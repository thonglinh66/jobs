<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

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
         $this->order = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $type="Tuyển dụng";
        if($this->order->type == 0)   $type="Thực tập"; 
        return $this->html('<p> Sinh viên ('.$this->order->mail_SV.' ) ' .$this->order->name.' có mã số SV: '.$this->order->code.' muốn xin '.$type.' vào công ty ('.$this->order->mail.')<br>'.$this->order->content_AP.'</p>')
        ->attach('UserView/file/'.$this->order->CV);
    }
}
