<?php

 
namespace App\Http\Controllers;

use App\Http\Requests\EnqueryFormRequest;
use App\EnqueryForm;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class EnqueryFormController extends Controller

{
 
 
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    private $folder = "admin.enquery-forms.";

    private $base_url = "admin/enquiry-forms";

    private $label = "Enquiry Forms";

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
 
         
        $enqueryForm = EnqueryForm::orderBy('id','desc')->get();
      
        $base_url = $this->base_url;

        $label = $this->label;
        
        return view($this->folder.'list',compact('enqueryForm','base_url','label'));

    }

    

   



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

     



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(EnqueryFormRequest $request)

    {
       $data = EnqueryForm::create($request->validated());
       $error = 0;
        $msg = 'success';
        $res = [
            'error' => $error,
            'message' => $msg,
            'data' => $data,
        ];
        return response()->json($res, 200);
     
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

  



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\News  $news

     * @return \Illuminate\Http\Response

     */

    public function update(EnqueryFormRequest $request, EnqueryForm $EnqueryForm)

    {
        
        $EnqueryForm->update($request->validated());
 
        return back()->with('success', $this->label.' updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Models\News  $news

     * @return \Illuminate\Http\Response

     */

    public function destroy(EnqueryForm $EnqueryForm)

    { 

        $EnqueryForm->delete();



        //redirecting with flashj data

        return redirect($this->base_url)->with('status',  $this->label.' deleted successfully.');

    }
  
  


    



   









}

