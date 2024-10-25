<?php  

namespace App\Helpers;

class Helpers
{
    public static function generateOtp()
    {
        return rand(1000, 9999);
    }

    public static function truncate($string, $length)
    {
        return substr($string, 0, $length);
    }
}
 
 ?>