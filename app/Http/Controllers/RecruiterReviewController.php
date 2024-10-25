<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecruiterReviewRequest;
use Illuminate\Support\Str;
use Image; 
use App\RecruiterReview;
use DB;
use Cookie;

class RecruiterReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except([]);
        $this->middleware('isAdmin')->except([]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $folder = "admin.recruiter-reviews.";
   private $base_url = "admin/recruiter-reviews";
   private $label = "Recruiter Reviews";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        $recruiter_reviews = RecruiterReview::all();
        $base_url = $this->base_url;
        $label = $this->label;
        return view($this->folder.'list',compact('recruiter_reviews','base_url','label'));
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
        return view($this->folder.'add',compact('label','base_url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecruiterReviewRequest $request)
    {
         
        RecruiterReview::create($request->validated()); 

        return redirect()->back()->with('success', $this->label.' added successfully');;
    }

    
    
     

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(RecruiterReview $RecruiterReview)
    {
        
        $base_url = $this->base_url;
        $label = $this->label;
        return view($this->folder.'edit', $RecruiterReview,compact('base_url','label' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(RecruiterReviewRequest $request, RecruiterReview $RecruiterReview)
    {
         
        $RecruiterReview->update($request->validated());
        
        return back()->with('success', $this->label.' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecruiterReview $RecruiterReview)
    { 
        
        $RecruiterReview->delete();
 
        return redirect($this->base_url)->with('status',  $this->label.' deleted successfully.');
    }
     
 


}
