<?php
namespace App\Http\Controllers;
use App\Http\Requests\JobTitleRequest;
use App\JobTitle;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class JobTitleController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except(["job-title"]);
        $this->middleware("isAdmin")->except(["job-title"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $folder = "admin.job-title.";
    private $base_url = "admin/job-title";
    private $label = "Job Title";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_title = JobTitle::all();
        $base_url = $this->base_url;
        $label = $this->label;
        // dd( $base_url);
        return view(
            $this->folder . "list",
            compact("job_title", "base_url", "label")
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
    public function store(JobTitleRequest $request)
    {
         
        JobTitle::create($request->validated());
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
    public function edit(JobTitle $JobTitle)
    {
        $base_url = $this->base_url;
        $label = $this->label;
        return view(
            $this->folder . "edit",
            $JobTitle,
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
    public function update(JobTitleRequest $request, JobTitle $JobTitle)
    {
        $JobTitle->update($request->validated());
        return back()->with("success", $this->label . " updated successfully");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobTitle $JobTitle)
    {
        $JobTitle->delete();
        //redirecting with flashj data
        return redirect($this->base_url)->with(
            "status",
            $this->label . " deleted successfully."
        );
    }
 
    
 
}
