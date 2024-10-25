<?php 
// app/Helpers/EmailHelper.php

use Google_Client;
use Google_Service_Gmail;
use Illuminate\Support\Facades\View;
use App\GmailToken;

if (!function_exists('sendEmail')) {
    function sendEmail($toEmail, $subject, $htmlContent,$ccEmail)
    {
         
        $email = '';  
         
        // Fetch the necessary credentials from the environment or database
        $clientId = env('GMAIL_API_CLIENT_ID');
        $clientSecret = env('GMAIL_API_CLIENT_SECRET');
        $gmail_data = GmailToken::first();
        $refreshToken = $gmail_data->token;  

        $client = new Google_Client();
        $client->setAuthConfig([
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
        ]);
        $client->refreshToken($refreshToken);
 
        $gmailService = new Google_Service_Gmail($client);
        $senderName = 'DUM';
        // Set up the email message
        $message = new \Google_Service_Gmail_Message();
        $rawMessage = "From: $senderName <$email>\r\n";
        // $rawMessage = "From: DUM <$email>\r\n";
        // $rawMessage = "From: $email\r\n";
        $rawMessage .= "To: $toEmail\r\n";  
        $rawMessage .= "Cc: $ccEmail\r\n";
        $rawMessage .= "Subject: $subject\r\n";
        $rawMessage .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
        $rawMessage .= $htmlContent;  

        try {
            $message->setRaw(base64_encode($rawMessage));
            $sentMessage = $gmailService->users_messages->send('me', $message);
            
            return response()->json(['success' => true, 'message' => 'Email sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error sending email: ' . $e->getMessage()]);
        }
    }
}



 ?>