<?php


namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Event;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
 
    }

    private $folder = "admin.events.";

    private $base_url = "admin/events";

    private $label = "Events";



    public function index()
    {

        $events = Event::all();

        $base_url = $this->base_url;

        $label = $this->label;
        // dd( $base_url);
        return view($this->folder . 'list', compact('events', 'base_url', 'label'));

    }





    public function create()
    {

        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder . 'add', compact('label', 'base_url'));

    }


    public function store(EventRequest $request)
    {
        if ($request->hasFile('logo') && $request->hasFile('banner')) {
            $imageName = $this->uploadFile($request->file('logo'));
            $imageName1 = $this->uploadFile($request->file('banner'));

        }

        $validate = array_merge($request->validated(), [
            'logo' => $imageName,
            'banner' => $imageName1,

        ]);
        Event::create($validate);
 
        return redirect()->back()->with('success', $this->label . ' added successfully');

    }


    public function edit(Event $Event)
    {



        $base_url = $this->base_url;

        $label = $this->label;

        return view($this->folder . 'edit', $Event, compact('base_url', 'label'));

    }




    public function update(EventRequest $request, Event $Event)
    {

        $Event->update(array_merge($request->validated(), [
            "logo" => $this->uploadFile($request->logo, $Event->logo),
            "banner" => $this->uploadFile($request->banner, $Event->banner),
        ]));

        return back()->with('success', $this->label . ' updated successfully');

    }




    public function destroy(Event $Event)
    {

        $Event->delete();



        //redirecting with flashj data

        return redirect($this->base_url)->with('status', $this->label . ' deleted successfully.');

    }


    public function uploadFile($file, $old = null)
    {
        // $fileName = $old;
        $fileName1 = $old;
        // (isset($old)) ? $this->deleteFile($old):'';
        if (isset($file)) {
            $fileName = time() . explode('.', $file->hashName())[0] . '.' . $file->extension();
            $fileName1 = 'events/' . time() . explode('.', $file->hashName())[0] . '.' . $file->extension();
            $file->move(public_path('/uploads/events'), $fileName);
        }
        // dd($fileName1);
        return $fileName1;
    }




    protected function deleteFile($old)
    {

        if (isset($old)) {



            $file_path = public_path('events') . '/' . $old;



            @unlink($file_path);



        }

    }

    protected function uploadImage($image)
    {

        $input['file'] = time() . '.' . $image->getClientOriginalExtension();



        $destinationPath = public_path('/thumbnail/events');



        $imgFile = Image::make($image->getRealPath());



        $imgFile->resize(440, 440, function ($constraint) {

            $constraint->aspectRatio();

        })->save($destinationPath . '/' . $input['file']);



        $destinationPath = public_path('/uploads/events');

        $image->move($destinationPath, $input['file']);



        return 'events/' . $input['file'];

    }
    public function removeImage($image)
    {

        $image_path = public_path('uploads') . '/' . $image;

        $image_path2 = public_path('thumbnail') . '/' . $image;

        @unlink($image_path);

        @unlink($image_path2);

    }


}

