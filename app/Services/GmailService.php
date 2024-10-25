<?php 
 
namespace App\Services;
 
use Google\Client as Google_Client;
use Google\Service\Gmail;
use Illuminate\Http\Request;

use App\GmailToken;


class GmailService
{
    public static function sendEmail($name, $user_id, $password,$email)
    {

        $clientId = env('GMAIL_API_CLIENT_ID');
        $clientSecret = env('GMAIL_API_CLIENT_SECRET');
        $gmailData = GmailToken::first();
        $refreshToken = $gmailData->token;

        $client = new Google_Client();
        $client->setAuthConfig([
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
        ]);
        $client->refreshToken($refreshToken);

        $gmailService = new Gmail($client);

        $subject = 'New Get Quote Query';
        $toEmail = 'shoeba051@gmail.com';
        $message = new \Google_Service_Gmail_Message();
        $messageBody = "Contact Details:\n\n" .
            "Name: $name\n" .
            "UserId: $user_id\n" .
            "Password: $password\n\n";

        $rawMessage = "From: $email\r\n";
        $rawMessage .= "To: $toEmail\r\n";
        $rawMessage .= "Subject: $subject\r\n";
        $rawMessage .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
        $rawMessage .= "$messageBody";

        try {
            $message->setRaw(base64_encode($rawMessage));
            $sentMessage = $gmailService->users_messages->send('me', $message);

            return ['success' => true, 'message' => 'Email sent successfully'];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => 'Error sending email: ' . $e->getMessage()];
        }
    }
}




 ?>