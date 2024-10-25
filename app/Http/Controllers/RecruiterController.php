<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Otp;
use App\Recruiter;

class RecruiterController extends Controller
{
    private $folder = "admin.recruiters.";

    private $base_url = "admin/recruiters";

    private $label = "Recruiters";


    public function index()
    {
        $base_url = $this->base_url;

        $label = $this->label;
        $recruiters = Recruiter::all();
    
        return view($this->folder.'list',compact('recruiters','base_url','label'));
         
    }

    public function recruiterLoginForm()
    {
        $rec = Recruiter::all();
        // dd($rec);
        return view('recruiter-login');
    }

    public function sendOtp(Request $request)
        {
            $phoneNumber = $request->mobileNumber; 

            $generateOtp = rand(1000, 9999);
            $request->session()->put('otp', $generateOtp); 

            $recruiter = Recruiter::where('phone', $phoneNumber)->first();
            $request->session()->put('phone', $recruiter);

            if (!$recruiter) {
                $otpData = Recruiter::create([
                    'phone' => $phoneNumber,
                    'otp' => $generateOtp, 
                ]);
            } else {
                $otpData = $recruiter->update([
                    'otp' => $generateOtp, 
                ]);
            }

            if ($otpData) {
                return response()->json(['success' => true, 'message' => 'OTP sent successfully']);
            } else {
                return response()->json(['success' => false]);
            }
        }


    public function resendOtp(Request $request)
    {
        $getNumber = $request->mobileNumber;
        
        $recruiterNumber = Recruiter::where(['phone' => $getNumber])->first();
        $generateOtp = rand(1000, 9999);
        $otp = $request->session()->put('otp', $generateOtp);
        if($recruiterNumber)
        {
            $recruiterNumber = Recruiter::where(['phone' => $getNumber])->first();
            $otpData = $recruiterNumber->update([
                'phone' => $getNumber,
                'otp' => $generateOtp, 
            ]);
            if($otpData)
            {
                return response()->json(['success' => true, 'message' => 'Otp Resent successfully',]);
            }else
            {
                return response()->json(['success' => false,]);
            }
        }
    }


    public function verifyOtp(Request $request)
    {
        $phoneNumber = $request->input('phone');
        $enteredOtp = $request->input('otp');

        $recruiter = Recruiter::where('phone', $phoneNumber)->first();
        $sessionOtp = $request->session()->get('otp');

        if ($enteredOtp == $sessionOtp) {
            Session::put('phone', $phoneNumber);   
            if($recruiter->status == 1)
            {
                return response()->json(['success' => 2, 'message' => 'Send to Profile page']);
            }else{
                return response()->json(['success' => true, 'message' => 'Send to next page']);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid OTP']);
        }
    }
    
    public function recruiterBasicProfile()
    {
        return view('recruiter-basic-profile');
    }
    
    public function recruiterBasicProfileSubmit(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'full_name'  => 'required|string',
            'consultant' => 'required'
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        else
        {
            $phoneNumber = Session::get('phone');
            if($phoneNumber)
            {
                $recruiter = Recruiter::where('phone', $phoneNumber)->first();
                if($recruiter)
                {
                    $full_name = $request->input('full_name');
                    $consultant = $request->input('consultant');

                    if($full_name && $consultant)
                    {
                        $recruiter->update([
                            'full_name' => $full_name,
                            'consultant' => $consultant,
                        ]);

                        return response()->json(['success' => true, 'message' => 'Send to next page']);
                    }
                    return response()->json(['success' => true, 'message' => 'Something Went Wrong']);
                }
                return response()->json(['success' => true, 'message' => 'No Recruiter Found']);
            }
            return response()->json(['success' => true, 'message' => 'Phone Number Does Not Exit.']);
        }
    }

    public function recruiterVerifyOfficialEmail()
    {
        return view('recruiter-verify-official-email');
    }

    public function recruiterEmailSubmit(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required|email|unique:recruiters',
        ]);

        if ($validate->fails()) {
            return response()->json(['success' => false, 'errors' => $validate->errors()]);
        } else {
            $phoneNumber = Session::get('phone');

            if ($phoneNumber) {
                $recruiter = Recruiter::where('phone', $phoneNumber)->first();

                if ($recruiter) {
                    $email = $request->input('email');
                    $request->session()->put('email', $email);
                    $generateOtp = rand(1000, 9999);

                    $otpData = $recruiter->update([
                        'email' => $email,
                        'otp'   => $generateOtp
                    ]);

                    if ($otpData) {
                        $request->session()->put('otp', $generateOtp);

                        return response()->json(['success' => true, 'message' => 'OTP sent successfully']);
                    } else {
                        return response()->json(['success' => false]);
                    }
                }
            }
        }
    }

    public function recruiterEmailOtp()
    {
        return view('recruiter-verify-official-email-otp');
    }

    public function EmailVerifyOtp(Request $request)
    {
        $email = Session::get('email');
        $enteredOtp = $request->input('otp');
        $sessionOtp = $request->session()->get('otp');

        if($enteredOtp == $sessionOtp)
        {
            Session::put('email', $email);
            return response()->json(['success' => true, 'message' => 'Send to next page']);
        }else
        {
            return response()->json(['success' => false, 'message' => 'Invalid Otp']);
        }
    }

    public function recruiterUploadDocuments()
    {
        return view('recruiter-upload-company-document-to-verify');
    }

    public function UploadDocuments()
    {
        return view('recruiter-upload-certificate-page');
    }

    public function uploadDocumentSubmit(Request $request)
    {
        $filesToValidate = [
            'gst_certificate', 'pan_certificate', 'fssai_certificate',
            'incorporation_certificate', 'shop_certificate', 'msme_certificate'
        ];
        $validationRules = [
            'certificate_number' => 'required'
        ];
        
        foreach ($filesToValidate as $file) {
            $validationRules[$file] = 'mimes:jpg,jpeg,png,pdf|max:2048';
        }
        
        $validate = Validator::make($request->all(), $validationRules);
        
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }        
    
        $email = Session::get('email');
    
        if($email)
        {
            $recruiter = Recruiter::where('email', $email)->first();
            
            if($recruiter)
            {
                $requestData = $request->all();

                foreach ($requestData as $key => $value) {
                    if ($request->hasFile($key) && $request->file($key)->isValid()) {
                        $imageName = time().'.'.$request->file($key)->extension();  
                        $request->file($key)->move(public_path('uploads/documents'), $imageName);

                        $requestData[$key] = $imageName;
                    }
                }
                $recruiter->status = 1;
                $recruiter->update($requestData);

                session()->flash('success', 'Documents Uploaded Successfully.');
                return redirect()->route('thank-you'); 
            }
        }
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}