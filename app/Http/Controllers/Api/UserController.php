<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationForm;

use Google\Client as Google_Client;
use Google\Service\Gmail;
use App\GmailToken;
use Illuminate\Support\Facades\View;
class UserController extends Controller
{

	 public function store(Request $request){
		$error = 0;
        $msg = 'success';
        $data = [];
        $rules = [
            'name' => 'required||max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|digits:10|unique:users,phone',
            'state' => 'required',
            'organization' => 'required',
            'level_officer' => 'required',
            'gender' => 'required',
            // 'upload_id_card' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'upload_id_card' => 'required|mimes:pdf',
        ];
     	// dd($ru)
		DB::beginTransaction();
        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $error = 1;
                $msg = $validator->errors();
            } else {
				$id_card = $this->uploadFile($request->file('upload_id_card'));
				$user_id = random_int(1000, 9999);
				$password = Str::random(12);
                $user_data = new User();
                $user_data->user_id='DUM'.$user_id;
                $user_data->name=$request->name;
                $user_data->email=$request->email;
				$user_data->password = Hash::make($password);
                $user_data->show_password=$password;
                $user_data->phone=$request->phone;
                $user_data->state=$request->state;
                $user_data->organization=$request->organization;
                $user_data->level_officer=$request->level_officer;
                $user_data->gender=$request->gender;
				$user_data->upload_id_card = $id_card;
                $user_data->save();
                // $this->sendEmail($user_data);
                $subject = 'Password reset for Digital Utility Manager Course login';
                $email = $user_data->email;
                $ccEmail = 'shoeba051@gmail.com';
                $htmlContent = View::make('emails.login-details', compact('user_data'))->render();
                sendEmail($email, $subject, $htmlContent,$ccEmail);

                // Mail::to('shoeb@cruxcreativesolutions.com')->send(new RegistrationForm($user_data));
                DB::commit();
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $error = 1;
            $msg = $e->getMessage();
        }
        $res = [
            'error' => $error,
            'message' => $msg,
            'data' => $data,
        ];
        return response()->json($res, 200);
	}

	public function Login(Request $request)
    {
		$error = 0;
        $msg = 'success';
        $data = [];
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
		DB::beginTransaction();
		try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $error = 1;
                $msg = $validator->errors();
				 DB::rollBack();
            } else {

				$credentials = $request->only('email', 'password');
				if (Auth::attempt($credentials)) {
					$user = Auth::user();
                    if ($user->active == 1) {
    					$token = Str::random(60);
    					$user->api_token = $token;
    					$user->save();
    					$data = [
    						'user_id' =>  $user->user_id,
    						'token' => $token,
    						'attempt' => $user->attempt,
    					];
                    }else{
                        $error = 1;
                        $msg = 'Your Account is Inactive. Please contact admin support..';
                        DB::rollBack();
                    }
				}else{
                	$error = 1;
					$msg = 'Invalid Credentials';
					DB::rollBack();
				}
            }
        } catch (\Exception $e) {
            $error = 1;
            $msg = $e->getMessage();
			DB::rollBack();
        }
        $res = [
            'error' => $error,
            'message' => $msg,
            'data' => $data,
        ];
        return response()->json($res, 200);
    }

	public function updatePassword(Request $request)
	{
		$error = 0;
        $msg = 'success';
        $data = [];
        $rules = [
            'email' => 'required',
            'new_password' => 'required',
            'api_token' => 'required',
        ];
		DB::beginTransaction();
		try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $error = 1;
                $msg = $validator->errors();
				DB::rollBack();
            } else {
				$user = User::where('email', $request->email)
                    ->where('api_token', $request->api_token)
                    ->first(); 
					if ($user) {
						$user->password = Hash::make($request->new_password);
						$user->show_password=$request->new_password;
						$user->attempt =$user->attempt+1;
						$user->save();
						DB::commit();
					}else{
						$error = 1;
						$msg = 'User Not found';
						DB::rollBack();
					}
				}
        } catch (\Exception $e) {
            $error = 1;
            $msg = $e->getMessage();
			DB::rollBack();
        }
        $res = [
            'error' => $error,
            'message' => $msg,
            'data' => $data,
        ];
        return response()->json($res, 200);
	}

	protected function uploadImage($image,$resize=400)
	{ 
		$input['file'] = time().'.webp';
		$destinationPath = public_path('/thumbnail/id-card/');
		$imgFile = Image::make($image->getRealPath())->encode('webp', 40);
	$imgFile2 = Image::make($image->getRealPath())->encode('webp',40);
	$destinationPath = public_path('/uploads/id-card');
		$imgFile2->resize($resize, $resize, function ($constraint) {
			$constraint->aspectRatio();
			})->save($destinationPath.'/'.$input['file']);
	return 'id-card/'.$input['file'];
	}

	public function uploadFile($file,$old=null)
    {
        $fileName = $old;
        (isset($old)) ? $this->deleteFile($old):'';
        if(isset($file)){
            $fileName = time().explode('.',$file->hashName())[0].'.'.$file->extension();  
            $file->move(public_path('id-card'), $fileName);
        }
        return $fileName;
    }

    // private  function sendEmail($data)
    // {
    //     $user_id = $data->user_id ;
    //     $name = $data->name ;
    //     $email = $data->email ;
    //     $password = $data->show_password ;
    //     $phone = $data->phone ;
    //     $ccEmail = 'shoebali686@gmail.com';
         
    //     $clientId = env('GMAIL_API_CLIENT_ID');
    //     $clientSecret = env('GMAIL_API_CLIENT_SECRET');
    //     $gmail_data = GmailToken::first();
         
    //     $refreshToken = $gmail_data->token;  

    //     $client = new Google_Client();
    //     $client->setAuthConfig([
    //         'client_id' => $clientId,
    //         'client_secret' => $clientSecret,
    //     ]);
    //     $client->refreshToken($refreshToken);
 
    //     $gmailService = new Gmail($client);
    //     $subject = 'Registration Confirmation for Digital Utility Manager Course';
    //     $toEmail = 'shoeb@cruxcreativesolutions.com';  
    //     $htmlContent = View::make('emails.login-details', compact('name', 'email', 'phone', 'user_id', 'password','data'))->render();

    //     // Set up the email message
    //     $message = new \Google_Service_Gmail_Message();
    //     $rawMessage = "From: $email\r\n";
    //     $rawMessage .= "To: $email\r\n"; // Verify if this is the correct recipient
    //     $rawMessage .= "Cc: $ccEmail\r\n";
    //     $rawMessage .= "Subject: $subject\r\n";
    //     $rawMessage .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
    //     $rawMessage .= $htmlContent;

    //     try {
    //         $message->setRaw(base64_encode($rawMessage));
    //         $sentMessage = $gmailService->users_messages->send('me', $message);
            
    //         return response()->json(['success' => true, 'message' => 'Email sent successfully']);
    //     } catch (\Exception $e) {
    //         return response()->json(['success' => false, 'message' => 'Error sending email: ' . $e->getMessage()]);
    //     }
    // }

    public function ResetPassword(Request $request)
    {
        dd("test");
        $error = 0;
        $msg = 'success';
        $data = [];
        $rules = [
            'user_id' => 'required',
            'select_type' => 'required',
        ];
        DB::beginTransaction();
        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $error = 1;
                $msg = $validator->errors();
                DB::rollBack();
            } else {
                return response()->json($request->user_id, $request->select_type);

                // $user = User::where('user_id', $request->new_user_id)
                //     ->where('api_token', $request->api_token)
                //     ->first(); 
                //     if ($user) {
                //         $user->password = Hash::make($request->new_password);
                //         $user->show_password=$request->new_password;
                //         $user->attempt =$user->attempt+1;
                //         $user->save();
                //         DB::commit();
                //     }else{
                //         $error = 1;
                //         $msg = 'Invalid Token';
                //         DB::rollBack();
                //     }
                }
        } catch (\Exception $e) {
            $error = 1;
            $msg = $e->getMessage();
            DB::rollBack();
        }
        $res = [
            'error' => $error,
            'message' => $msg,
            'data' => $data,
        ];
        return response()->json($res, 200);
    }
    
}
