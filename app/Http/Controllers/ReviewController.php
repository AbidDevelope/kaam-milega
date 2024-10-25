<?php

 
namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Review;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class ReviewController extends Controller

{
    public function __construct()

    {

     
        $this->middleware('auth');
        $this->middleware('isAdmin');

       

    }
   
    private $folder = "admin.reviews.";

    private $base_url = "admin/reviews";

    private $label = "Reviews";

  

    public function index()

    {
 
        $reviews = Review::all();

        $base_url = $this->base_url;

        $label = $this->label;
        // dd( $base_url);
        return view($this->folder.'list',compact('reviews','base_url','label'));

    }

    

   
 
    public function create()

    {

        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder.'add',compact('label','base_url'));

    }

 
    public function store(ReviewRequest $request)

    {
        if($request->hasFile('logo') ){
            $imageName = $this->uploadFile($request->file('logo'));
             
        }
       
        $validate =   array_merge($request->validated(),[
            'logo'=>$imageName,
             
        ]);
        Review::create($validate);



        return redirect()->back()->with('success', $this->label.' added successfully');

    }
 

    public function edit(Review $Review)

    {

        

        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder.'edit', $Review,compact('base_url','label'));

    }


 

    public function update(ReviewRequest $request, Review $Review)

    { 

        $Review->update(array_merge($request->validated(),[
            "logo"=> $this->uploadFile($request->logo,$Review->logo),
            
        ]));
 
        return back()->with('success', $this->label.' updated successfully');

    }


 

    public function destroy(Review $Review)

    { 

        $Review->delete();



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
            $fileName1 = 'reviews/'.time().explode('.',$file->hashName())[0].'.'.$file->extension();  
            $file->move(public_path('/uploads/reviews'), $fileName);
        }
        // dd($fileName1);
        return $fileName1;
    }
     

    

    protected function deleteFile($old)

    {

        if(isset($old))

        {

            

         $file_path = public_path('reviews').'/'.$old;

          

         @unlink($file_path);

                   

        }

    }

    protected function uploadImage($image)

   { 

    $input['file'] = time().'.'.$image->getClientOriginalExtension();

        

    $destinationPath = public_path('/thumbnail/reviews');



    $imgFile = Image::make($image->getRealPath());



    $imgFile->resize(440, 440, function ($constraint) {

       $constraint->aspectRatio();

    })->save($destinationPath.'/'.$input['file']);



   $destinationPath = public_path('/uploads/reviews');

   $image->move($destinationPath, $input['file']);



   return 'reviews/'.$input['file'];

}

   



 public function removeImage($image){

    $image_path = public_path('uploads').'/'.$image;

    $image_path2 = public_path('thumbnail').'/'.$image; 

    @unlink($image_path);

    @unlink($image_path2);

}



    



   









}

