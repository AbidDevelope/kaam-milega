<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use App\User;
use Illuminate\Support\Facades\View;
use App\CertificateImage;

class PdfController extends Controller
{

    public function generatePdf($id){
    
        $user = User::select('id', 'name', 'email', 'phone','organization')->where('api_token', $id)->first();
        $certificate = CertificateImage::first();
        
        if (!$user) {
            abort(404);  
        }
        $imageUrl = public_path('uploads/' . $certificate->image);
        if (file_exists($imageUrl)) {
            $imageData = file_get_contents($imageUrl);
            $base64Image = 'data:image/png;base64,' . base64_encode($imageData);
        } else {
            // Set a default image URL if the file doesn't exist
            $base64Image = 'data:image/png;base64,Your_Default_Image_Base64';
        }


        $data = [
            'user' => $user,
            'certificate'=>$certificate,
            'image_url'=>$base64Image
        ];
     
        $html = View::make('question', $data)->render();
     
        // $options = new Options();
        // $options->set('isRemoteEnabl/ed', true);  
        $dompdf = new Dompdf();
     
        $dompdf->loadHtml($html);
     
        $dompdf->setPaper('A4', 'landscape');
     
        $dompdf->render();
     
         $dompdf->stream($user->name.'-certificate.pdf');
        // return view('question', ['user'=>$user,'certificate'=>$certificate,'image_url'=>$base64Image]);
    }

    public function generatePdfAdmin($id){
    
        $user = User::select('id', 'name', 'email', 'phone','organization')->where('user_id', $id)->first();
        $certificate = CertificateImage::first();
        
        if (!$user) {
            abort(404);  
        }
        $imageUrl = public_path('uploads/' . $certificate->image);
        if (file_exists($imageUrl)) {
            $imageData = file_get_contents($imageUrl);
            $base64Image = 'data:image/png;base64,' . base64_encode($imageData);
        } else {
            // Set a default image URL if the file doesn't exist
            $base64Image = 'data:image/png;base64,Your_Default_Image_Base64';
        }


        $data = [
            'user' => $user,
            'certificate'=>$certificate,
            'image_url'=>$base64Image
        ];
     
        $html = View::make('question', $data)->render();
     
        // $options = new Options();
        // $options->set('isRemoteEnabl/ed', true);  
        $dompdf = new Dompdf();
     
        $dompdf->loadHtml($html);
     
        $dompdf->setPaper('A4', 'landscape');
     
        $dompdf->render();
     
         $dompdf->stream($user->name.'-certificate.pdf');
        // return view('question', ['user'=>$user,'certificate'=>$certificate,'image_url'=>$base64Image]);
    }
}
