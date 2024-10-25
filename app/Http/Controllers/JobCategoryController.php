<?php
namespace App\Http\Controllers;
use App\Http\Requests\JobCategoryRequest;
use App\JobCategory;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class JobCategoryController extends Controller
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
    private $folder = "admin.job-category.";
    private $base_url = "admin/job-category";
    private $label = "Job Category";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_category = JobCategory::all();
        $base_url = $this->base_url;
        $label = $this->label;
        // dd( $base_url);
        return view(
            $this->folder . "list",
            compact("job_category", "base_url", "label")
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
    public function store(JobCategoryRequest $request)
    {
        if($request->hasFile('image')){
            $imageName = $this->uploadFile($request->file('image'));
        }
       
        $validate =   array_merge($request->validated(),[
            'image'=>$imageName,
        ]);

        JobCategory::create($validate);
        return redirect()
            ->back()
            ->with("success", $this->label . " added successfully");
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
    public function edit(JobCategory $JobCategory)
    {
        $base_url = $this->base_url;
        $label = $this->label;
        return view(
            $this->folder . "edit",
            $JobCategory,
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
    public function update(JobCategoryRequest $request, JobCategory $JobCategory)
    {
        $JobCategory->update(array_merge($request->validated(),[
            "image"=> $this->uploadFile($request->image,$JobCategory->image),
        ]));
        return back()->with("success", $this->label . " updated successfully");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobCategory $JobCategory)
    {
        $JobCategory->delete();
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
            $fileName1 = 'job-category/'.time().explode('.',$file->hashName())[0].'.'.$file->extension();  
            $file->move(public_path('/uploads/job-category'), $fileName);
        }
        
        return $fileName1;
    }
     

    

    protected function deleteFile($old)

    {

        if(isset($old))

        { 

         $file_path = public_path('job-category').'/'.$old;
 
         @unlink($file_path);

                   

        }

    }
 
}
