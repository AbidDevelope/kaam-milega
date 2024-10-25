<?php

 
namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Banner;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class BannerController extends Controller

{
    public function __construct()

    {

     
        $this->middleware('auth');
        $this->middleware('isAdmin');

       

    }
   
    private $folder = "admin.banners.";

    private $base_url = "admin/banners";

    private $label = "Banners";

  

    public function index()

    {
 
        $banner = Banner::all();

        $base_url = $this->base_url;

        $label = $this->label;
        // dd( $base_url);
        return view($this->folder.'list',compact('banner','base_url','label'));

    }

    

   
 
    public function create()

    {

        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder.'add',compact('label','base_url'));

    }

 
    public function store(BannerRequest $request)

    {
        if($request->hasFile('image') &&  $request->hasFile('rec_image') ){
            $imageName = $this->uploadFile($request->file('image'));
            $imageName1 = $this->uploadFile($request->file('rec_image'));
            
        }
       
        $validate =   array_merge($request->validated(),[
            'image'=>$imageName,
            'rec_image'=>$imageName1,
         
        ]);
        Banner::create($validate);



        return redirect()->back()->with('success', $this->label.' added successfully');

    }
 

    public function edit(Banner $Banner)

    {

        

        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder.'edit', $Banner,compact('base_url','label'));

    }


 

    public function update(BannerRequest $request, Banner $Banner)

    { 

        $Banner->update(array_merge($request->validated(),[
            "image"=> $this->uploadFile($request->image,$Banner->image),
            "rec_image"=> $this->uploadFile($request->rec_image,$Banner->rec_image),
             
        ]));
 
        return back()->with('success', $this->label.' updated successfully');

    }


 

    public function destroy(Banner $Banner)

    { 

        $Banner->delete();



        //redirecting with flashj data

        return redirect($this->base_url)->with('status',  $this->label.' deleted successfully.');

    }
 

    public function uploadFile($file,$old=null)
    {
        // $fileName = $old;
        $fileName1 = $old;
        // (isset($old)) ? $this->deleteFile($old):'';
        if(isset($file)){
            $fileName = time().explode('.',$file->hashName())[0].'.'.$file->extension();  
            $fileName1 = 'banners/'.time().explode('.',$file->hashName())[0].'.'.$file->extension();  
            $file->move(public_path('/uploads/banners'), $fileName);
        }
        // dd($fileName1);
        return $fileName1;
    }
     

    

    protected function deleteFile($old)

    {

        if(isset($old))

        {

            

         $file_path = public_path('banners').'/'.$old;

          

         @unlink($file_path);

                   

        }

    }

    protected function uploadImage($image)

   { 

    $input['file'] = time().'.'.$image->getClientOriginalExtension();

        

    $destinationPath = public_path('/thumbnail/banners');



    $imgFile = Image::make($image->getRealPath());



    $imgFile->resize(440, 440, function ($constraint) {

       $constraint->aspectRatio();

    })->save($destinationPath.'/'.$input['file']);



   $destinationPath = public_path('/uploads/banners');

   $image->move($destinationPath, $input['file']);



   return 'banners/'.$input['file'];

}

   



 public function removeImage($image){

    $image_path = public_path('uploads').'/'.$image;

    $image_path2 = public_path('thumbnail').'/'.$image; 

    @unlink($image_path);

    @unlink($image_path2);

}



    



   









}

