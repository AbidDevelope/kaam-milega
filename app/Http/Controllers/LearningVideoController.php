<?php

 
namespace App\Http\Controllers;

use App\Http\Requests\LearningVideoRequest;
use App\LearningVideo;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class LearningVideoController extends Controller

{
    public function __construct()

    {

     
        $this->middleware('auth');
        $this->middleware('isAdmin');

       

    }
   
    private $folder = "admin.learning-videos.";

    private $base_url = "admin/learning-videos";

    private $label = "Learning Videos";

  

    public function index()

    {
 
        $learning_videos = LearningVideo::all();

        $base_url = $this->base_url;

        $label = $this->label;
        // dd( $base_url);
        return view($this->folder.'list',compact('learning_videos','base_url','label'));

    }

    

   
 
    public function create()

    {

        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder.'add',compact('label','base_url'));

    }

 
    public function store(LearningVideoRequest $request)

    {
        if($request->hasFile('image')  ){
            $imageName = $this->uploadFile($request->file('image'));
          
        }
       
        $validate =   array_merge($request->validated(),[
            'image'=>$imageName,
             
        ]);
        LearningVideo::create($validate);



        return redirect()->back()->with('success', $this->label.' added successfully');

    }
 

    public function edit(LearningVideo $LearningVideo)

    {

        

        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder.'edit', $LearningVideo,compact('base_url','label'));

    }


 

    public function update(LearningVideoRequest $request, LearningVideo $LearningVideo)

    { 

        $LearningVideo->update(array_merge($request->validated(),[
            "image"=> $this->uploadFile($request->image,$LearningVideo->image),
            
        ]));
 
        return back()->with('success', $this->label.' updated successfully');

    }


 

    public function destroy(LearningVideo $LearningVideo)

    { 

        $LearningVideo->delete();



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
            $fileName1 = 'learning-videos/'.time().explode('.',$file->hashName())[0].'.'.$file->extension();  
            $file->move(public_path('/uploads/learning-videos'), $fileName);
        }
        // dd($fileName1);
        return $fileName1;
    }
     

    

    protected function deleteFile($old)

    {

        if(isset($old))

        {

            

         $file_path = public_path('learning-videos').'/'.$old;

          

         @unlink($file_path);

                   

        }

    }

    protected function uploadImage($image)

   { 

    $input['file'] = time().'.'.$image->getClientOriginalExtension();

        

    $destinationPath = public_path('/thumbnail/learning-videos');



    $imgFile = Image::make($image->getRealPath());



    $imgFile->resize(440, 440, function ($constraint) {

       $constraint->aspectRatio();

    })->save($destinationPath.'/'.$input['file']);



   $destinationPath = public_path('/uploads/learning-videos');

   $image->move($destinationPath, $input['file']);



   return 'learning-videos/'.$input['file'];

}

   



 public function removeImage($image){

    $image_path = public_path('uploads').'/'.$image;

    $image_path2 = public_path('thumbnail').'/'.$image; 

    @unlink($image_path);

    @unlink($image_path2);

}



    



   









}

