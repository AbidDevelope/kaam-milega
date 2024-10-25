<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;

class OtpLoginController extends Controller
{
    
    public function sendOtp(Request $req)
    {
         $req->validate(['phone'=>'required']);

            $user = User::where("phone",$req->phone)->first();
               if($user && $user->active==0){
                    session()->forget('is_registered');
                 session()->forget('phone');
                 session()->forget('otp');
                    return redirect()->back()->with('error','Please contact Administrator!');   
               }
               
         $rand_no =  mt_rand(10000,99999);        
       
         $response = $this->sendOtpToNumber($req->phone,$rand_no);
          session()->forget('is_registered');
         if($response)
         {
          session(['otp'=> $rand_no,'phone'=>$req->phone]);
 
//          $user = User::where("phone",session('phone'))->first();
 
           if($user){
               if($user->active==0){
                    session()->forget('is_registered');
                 session()->forget('phone');
                 session()->forget('otp');
                    return redirect()->back()->with('error','Please contact Administrator!');   
               }
               session(['is_registered'=>1]);
           }
 
            return redirect()->back()->with('success','OTP has Sent to your Mobile No !');
            
           }else{
             return redirect()->back()->with('error','Something Went wrong please try again later!');   
            }  
       }
    
    
    
    public function verifyOtpNumber(Request $req)
    {
      if(!empty(session('otp')))
      {
      
        $req->validate(['otp'=>'required']);
             if(session('otp') == $req->otp){
                 $user = User::where("phone",session('phone'))->where('active',1)->first();
                 if($user){
                      Auth::login($user);      
                 }else{
                 $req->validate(['name'=>'required']);
                  $user = User::create([
                             "name"=>$req->name,
                             "phone"=>session('phone')
                             ]);
                   Auth::login($user);      
                 }
                 session()->forget('is_registered');
                 session()->forget('phone');
                 session()->forget('otp');
                 
                 if($user->is_admin){
                     return response()->json(['admin_success' => true]);
                 }
                 return response()->json(['success' => true]);
               }else{ 
                   return response()->json(['error' => "Otp is Incorrect"]);
                }
                }else{
                    
                 return response()->json(['error' => "Otp is Expired"]);
              }
          }
     

    private function sendOtpToNumber($number,$otp){
 
      $url = 'username=carlelo920995';
      $url.= '&password=21063';
	  $url.= '&sender=CRLELO';
      $url.= '&to='.urlencode($number);
      $url.= '&message='.$otp."+is+the+One-Time+Password+to+verify+your+phone+number.+Please+enter+the+OTP+to+begin+your+journey.+A+world+of+best+deals+awaits+you.+Team+Car+Lelo";
      $url.= '&priority=1';
      $url.= '&dnd=1';
      $url.= '&unicode=0';
	  $url.= '&dlttemplateid=1207163784186135096';
    
      $urltouse =  "https://kit19.com/ComposeSMS.aspx?".$url;
    
      $ch = curl_init();
	  curl_setopt($ch, CURLOPT_URL, $urltouse);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      //Open the URL to send the message
      //$response = httpRequest($urltouse);
	  $response = curl_exec($ch);
      curl_close($ch);

      return($response);
     
}


    public function reSendOtp()
    {
        if(!empty((session('otp'))))
      {
         $rand_no =  mt_rand(10000,99999);        
       
         $response = $this->sendOtpToNumber(session('phone'),$rand_no);
    
         if($response)
         {
            session(['otp'=> $rand_no,'phone'=>session('phone')]);
            return response()->json(['success' => true]);
           }else{
                return response()->json(['success' => false]);
            }
        }
    }

}