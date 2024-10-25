<?php 
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoginDetailsEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $user_id;
    public $password;

    public function __construct($name, $email, $phone, $user_id, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->user_id = $user_id;
        $this->password = $password;
    }

    public function build()
    {
        return $this->view('emails.login-details')
                    ->subject('Registration Confirmation for Digital Utility Manager Course')
                    ->from('shoeb@cruxcreativesolutions.com', 'Shoeb Ali')
                    ->cc('shoeba051@gmail.com');  
    }
}



 ?>