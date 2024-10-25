<?php

namespace App\Http\Controllers;

use Google\Client as Google_Client;
use Google\Service\Gmail;
use Illuminate\Http\Request;

use App\GmailToken;



class TokenController extends Controller
{ 
    /**
     * Default Constructor
     */
     
     public function redirectToGoogleAuth()
    {
        $clientId = env('GMAIL_API_CLIENT_ID');
        $clientSecret = env('GMAIL_API_CLIENT_SECRET');
        $redirectUri = route('gmail.callback'); // Replace with your callback route

        $client = new Google_Client();
        $client->setAuthConfig([
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'redirect_uris' => [$redirectUri],
        ]);
        $client->setAccessType('offline');
        $client->addScope(Gmail::GMAIL_SEND);

        $authUrl = $client->createAuthUrl();
        return redirect()->to($authUrl);
    }

    public function handleGoogleCallback(Request $request)
    {
        $clientId = env('GMAIL_API_CLIENT_ID');
        $clientSecret = env('GMAIL_API_CLIENT_SECRET');
        $redirectUri = route('gmail.callback'); // Replace with your callback route

        $client = new Google_Client();
        $client->setAuthConfig([
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'redirect_uris' => [$redirectUri],
        ]);
        $client->setAccessType('offline');
        $client->addScope(Gmail::GMAIL_SEND);

        $code = $request->get('code');

        if ($code) {
             $accessToken = $client->fetchAccessTokenWithAuthCode($code);
             $refreshToken = $accessToken['refresh_token'];
             $gmail_token = new GmailToken;
             $gmail_token->token = $refreshToken;
             $gmail_token->save();
          
            return redirect('/');  
        } else {
            
            return redirect()->route('home')->with('error', 'Authorization failed.');
        }
    }

    public  function sendEmail( )
    {
 
        $name = 'Shoeb Ali';  
        $email = 'shoebali686@gmail.com';
        $phone = '8840102967';
         
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
 
        $gmailService = new Gmail($client);

        // Compose the email
        $subject = 'New Get Quote Query';
        $toEmail = 'shoeba051@gmail.com';  
        $message = new \Google_Service_Gmail_Message();
        $messageBody = "Contact Details:\n\n" .
               "Name: $name\n" .
               "Email: $email\n" .
               "Phone: $phone\n\n" .
                

        $rawMessage = "From: $email\r\n";
        $rawMessage .= "To: $toEmail\r\n";
        $rawMessage .= "Subject: $subject\r\n";
        $rawMessage .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
        $rawMessage .= "$messageBody";
 
        try {
            $message->setRaw(base64_encode($rawMessage));
            $sentMessage = $gmailService->users_messages->send('me', $message);
             
            return response()->json(['success' => true, 'message' => 'Email sent successfully']);
        } catch (\Exception $e) {
            
            return response()->json(['success' => false, 'message' => 'Error sending email: ' . $e->getMessage()]);
        }
    }

}