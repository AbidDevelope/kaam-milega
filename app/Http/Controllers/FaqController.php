<?php

 
namespace App\Http\Controllers;

use App\Http\Requests\FaqRFequest;
use App\Faq;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class FaqController extends Controller

{
    public function __construct()

    {

     
        $this->middleware('auth');
        $this->middleware('isAdmin');

       

    }
   
    private $folder = "admin.faqs.";

    private $base_url = "admin/faqs";

    private $label = "Faqs";

  

    public function index()

    {
 
        $faq = Faq::all();

        $base_url = $this->base_url;

        $label = $this->label;
        // dd( $base_url);
        return view($this->folder.'list',compact('faq','base_url','label'));

    } 
    
    public function create()

    {

        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder.'add',compact('label','base_url'));

    }

 
    public function store(FaqRFequest $request)

    {
        
        Faq::create($request->validated());
 
        return redirect()->back()->with('success', $this->label.' added successfully');

    }
 

    public function edit(Faq $Faq)

    {

        

        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder.'edit', $Faq,compact('base_url','label'));

    }


 

    public function update(FaqRFequest $request, Faq $Faq)

    { 

        $Faq->update($request->validated());
 
        return back()->with('success', $this->label.' updated successfully');

    }


 

    public function destroy(Faq $Faq)

    { 

        $Faq->delete();



        //redirecting with flashj data

        return redirect($this->base_url)->with('status',  $this->label.' deleted successfully.');

    }
 
 
    



    



   









}

