<?php
namespace App\Http\Controllers;
use App\Http\Requests\StateRequest;
use App\State;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class StateController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except(["States"]);
        $this->middleware("isAdmin")->except(["States"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $folder = "admin.states.";
    private $base_url = "admin/states";
    private $label = "State";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all();
        $base_url = $this->base_url;
        $label = $this->label;
        // dd( $base_url);
        return view(
            $this->folder . "list",
            compact("states", "base_url", "label")
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
    public function store(StateRequest $request)
    {
         
        State::create($request->validated());
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
    public function edit(State $State)
    {
        $base_url = $this->base_url;
        $label = $this->label;
        return view(
            $this->folder . "edit",
            $State,
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
    public function update(StateRequest $request, State $State)
    {
        $State->update($request->validated());
        return back()->with("success", $this->label . " updated successfully");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $State)
    {
        $State->delete();
        //redirecting with flashj data
        return redirect($this->base_url)->with(
            "status",
            $this->label . " deleted successfully."
        );
    }

    public function States()
    {
        $data = State::orderBy("id", "desc")->first();
        $error = 0;
        $msg = "success";
        $res = [
            "error" => $error,
            "message" => $msg,
            "data" => $data,
        ];
        return response()->json($res, 200);
    }

    public function uploadFile($file, $old = null)
    {
        // $fileName = $old;
        $fileName1 = $old;
        // (isset($old)) ? $this->deleteFile($old):'';
        if (isset($file)) {
            $fileName =
                time() .
                explode(".", $file->hashName())[0] .
                "." .
                $file->extension();
            $fileName1 =
                "contact_pages/" .
                time() .
                explode(".", $file->hashName())[0] .
                "." .
                $file->extension();
            $file->move(public_path("/uploads/contact_pages"), $fileName);
        }
        // dd($fileName1);
        return $fileName1;
    }
    protected function deleteFile($old)
    {
        if (isset($old)) {
            $file_path = public_path("/uploads") . "/" . $old;
            @unlink($file_path);
        }
    }
    protected function uploadImage($image)
    {
        $input["file"] = time() . "." . $image->getClientOriginalExtension();
        $destinationPath = public_path("/thumbnail/contact_pages");
        $imgFile = Image::make($image->getRealPath());
        $imgFile
            ->resize(440, 440, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($destinationPath . "/" . $input["file"]);
        $destinationPath = public_path("/uploads/contact_pages");
        $image->move($destinationPath, $input["file"]);
        return "contact_pages/" . $input["file"];
    }
    public function removeImage($image)
    {
        $image_path = public_path("uploads") . "/" . $image;
        $image_path2 = public_path("thumbnail") . "/" . $image;
        @unlink($image_path);
        @unlink($image_path2);
    }
}
