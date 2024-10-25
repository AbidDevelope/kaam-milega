<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Otp;
use App\Recruiter;
use DB;

class AdminController extends Controller
{

    public function __construct()
    {
    
        $this->middleware('auth');
       
        $this->middleware('isAdmin');
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_admin', 1)
        ->orderBy('name')->get();
        return view('admin.admin.list', ['users'=>$users]);
    }

    public function otpData()
    {
        $otp = Otp::orderBy('id','desc')->get();
        return view('admin.admin.otp-list', ['otp'=>$otp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $tables = collect(DB::select('SHOW TABLES'));
        
        $modules = $tables->whereNotIn('Tables_in_carlelo_db',['failed_jobs','otps','password_resets','wishlists','user_cars','migrations','book_test_drives','car_models','states','services','users']);
       
        return view('admin.admin.add',compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation first
        $messages = [
            'unique' => 'This :attribute is taken.',
        ];

        $validatedData = $request->validate([
            'name' => 'required||max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'permissions' => 'required',
            'phone' => 'required|digits:10|min:10|max:10|unique:users,phone',
        ], $messages);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->permissions = $request->permissions;
        $user->password = bcrypt($request->password);
        $user->is_admin = 1;
        $user->save();

        //redirecting with flash data
        return redirect('/admins/create')->with('success','Admin added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tables = collect(DB::select('SHOW TABLES'));
        
        $modules = $tables->whereNotIn('Tables_in_carlelo_db',['failed_jobs','otps','password_resets','states','wishlists','user_cars','migrations','book_test_drives','car_models','services','users']);
        $user = User::find($id);
        // dd($user);
        return view('admin.admin.edit', $user,compact('modules'));
    }


    public function changeStatus($id)
    {
         $user = User::where('id',$id)->where('is_admin',1)->firstOrFail();
         $user->active = ($user->active == 1) ? 0:1;
        
        // dd($user);
         $user->save();
         
          return redirect('/admins/')->with('status','Status Changed successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation first
        $messages = [
            'unique' => 'This :attribute is taken.',
        ];

        $validatedData = $request->validate([
            'name' => 'required||max:255',
            'phone' => 'required|digits:10|min:10|max:10|unique:users,phone,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            //  'permissions' => 'required',
        ], $messages);
   //dd($request->permissions);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // $user->permissions = implode(',',$request->permissions);
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        
       // dd($user->password);
        $user->save();

        //redirecting with flash data
        return back()->with('success','Admin updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        //redirecting with flashj data
        return redirect('/admins')->with('status','Admin deleted successfully.');
    }

    // public function trash()
    // {
    //     $users = User::onlyTrashed()->where('is_admin', 1)
    //     ->orderBy('name')->get();
    //     return view('admin.admin.trash', ['users'=>$users]);
    // }

    // public function restore($id)
    // {
    //     $user = User::onlyTrashed()->find($id);
    //     $user->restore();

    //     //redirecting with flashj data
    //     return redirect('/admins/trash')->with('status','Admin restored successfully.');
    // }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        //redirecting with flashj data
        return redirect('/admins/trash')->with('status','Admin deleted successfully.');
    }
}