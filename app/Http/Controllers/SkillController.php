<?php
namespace App\Http\Controllers;
use App\Http\Requests\SkillRequest;
use App\Skill;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except(["job-category"]);
        $this->middleware("isAdmin")->except(["job-category"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $folder = "admin.skills.";
    private $base_url = "admin/skills";
    private $label = "Skills ";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        $base_url = $this->base_url;
        $label = $this->label;
        // dd( $base_url);
        return view(
            $this->folder . "list",
            compact("skills", "base_url", "label")
        );
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
        return view($this->folder . "add", compact("label", "base_url"));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(SkillRequest $request)

    {
        if($request->hasFile('image')  ){
            $imageName = $this->uploadFile($request->file('image'));
            
        }
       
        $validate =   array_merge($request->validated(),[
            'image'=>$imageName,
         
        ]);
        Skill::create($validate);



        return redirect()->back()->with('success', $this->label.' added successfully');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $Skill)
    {
        $base_url = $this->base_url;
        $label = $this->label;
        return view(
            $this->folder . "edit",
            $Skill,
            compact("base_url", "label")
        );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    
    public function update(SkillRequest $request, Skill $Skill)

    { 

        $Skill->update(array_merge($request->validated(),[
            "image"=> $this->uploadFile($request->image,$Skill->image),
             
        ]));
 
        return back()->with('success', $this->label.' updated successfully');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $Skill)
    {
        $Skill->delete();
        //redirecting with flashj data
        return redirect($this->base_url)->with(
            "status",
            $this->label . " deleted successfully."
        );
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
