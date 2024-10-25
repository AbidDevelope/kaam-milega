<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\Http\Requests\DistrictRequest;
use Illuminate\Support\Str;
use Image;
use DB;

class DistrictController extends Controller
{

    public function __construct()
    {
         request()->attributes->add(['module' => 'districts']); 
        $this->middleware('isAdmin')->except(['blog','show','popularCities']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $folder = "admin.popular-city.";
    private $base_url = "admin/district";
    private $label = "PopularCity";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $district = District::all();
        $states = DB::table('states')->get();
        $base_url = $this->base_url;
        $label = $this->label;
        return view($this->folder.'list',compact('district','base_url','label','states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $base_url = $this->base_url;
        $label = $this->label;
        $states = DB::table('states')->get();
        return view($this->folder.'add',compact('label','base_url','states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistrictRequest $request)
    {
       //   if($request->hasFile('image')){
       //      $imageName = $this->uploadImage($request->file('image'));
       // // $imageName = $request->file('image')->store('blog_img', 'uploads');
       //  }

       //  District::create(['image'=>$imageName]);
        District::create($request->validated());

        return redirect()->back()->with('success', $this->label.' added successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(District $District)
    {
        $base_url = $this->base_url;
        $label = $this->label;
        $states = DB::table('states')->get();
        return view($this->folder.'edit', $District,compact('base_url','label','states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(DistrictRequest $request, District $District)
    {
         if($request->hasFile('logo')){
            $imageName = $this->uploadImage($request->file('logo'));
            if(!empty($imageName)){
                $this->removeImage($District->logo);
            }else{
               $imageName = $District->logo;
            }   
        
        }else{
             $imageName = $District->logo;
        }
        $is_popular = (!empty(request('is_popular'))) ? 1:0;
//dd($request->validated()+['logo'=>$imageName]);
        $District->update($request->validated()+['logo'=>$imageName,'is_popular'=>$is_popular]);
        
        return back()->with('success', $this->label.' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $District)
    { 
        $image_path = public_path('uploads').'/'.$District->image;
        $image_path2 = public_path('thumbnail').'/'.$District->image;
       
        @unlink($image_path);
        @unlink($image_path2);
        $District->delete();

        //redirecting with flashj data
        return redirect($this->base_url)->with('status',  $this->label.' deleted successfully.');
    }
   
   protected function uploadImage($image)
   { 
    $input['file'] = time().'.'.$image->getClientOriginalExtension();
        
    $destinationPath = public_path('/thumbnail/blog_img');

    $imgFile = Image::make($image->getRealPath());

    $imgFile->resize(440, 440, function ($constraint) {
       $constraint->aspectRatio();
    })->save($destinationPath.'/'.$input['file']);

   $destinationPath = public_path('/uploads/blog_img');
   $image->move($destinationPath, $input['file']);

   return 'blog_img/'.$input['file'];
}
   

 public function removeImage($image){
    $image_path = public_path('uploads').'/'.$image;
    $image_path2 = public_path('thumbnail').'/'.$image; 
    @unlink($image_path);
    @unlink($image_path2);
}

  public function popularCities(){
    
      $data = District::select('id','name','logo','state_id')->where('is_popular',1)->get();
      
      return response()->json($data);
  }

}
