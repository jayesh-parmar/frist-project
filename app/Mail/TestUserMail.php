<?php

namespace App\Mail;

use App\Models\SendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Swift_Image;

class TestUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $data;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$subject,$name)
     {
        $this->name=$name;
         $this->subject=$subject;
         $this->data = $data;
     }

    
    public function build()
    {

        return $this->subject($this->subject['subject'])->markdown('mail')
        ->with(['data',$this->data,'name', $this->name])
        ->attach(storage_path('app/' . $this->data['image']), 
        [
            'as' => 'uploaded_image.jpg', 
            'mime' => 'image/jpeg',
        ]);;
       
    }

}



