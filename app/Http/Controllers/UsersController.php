<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ad;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Storage;
use DB;
use Validator;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('approved');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logUser.mydash');

    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = User::with('ad')->find($id);

        return view('logUser.myads', ['ads' => $user->ad]);

    }
    public function showUserBlogs($id)
    {
         $user = User::with('posts')->find($id);
         return view('logUser.myblogs', ['posts' => $user->posts]);
        

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /*   if(Auth::user()){
            $user = User::find(Auth::user()->id);
            return view()->withUser($user);
        } */
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg'

        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        if ($request->hasFile('image')) {
            //image
            //Get filename w extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Samo ime
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //samo extension
            $extension = $request->file('image')->getclientOriginalExtension();
            //create new filename
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload image
            Image::make($request->file('image'))->resize(300, null, function($constraint) {  $constraint->aspectRatio();}) ->save('assets/images/user_images/'.$filenameToStore);
            DB::table('users')->where('id', $id)->update([
                'name' => $request->last_name,
                'last_name' =>  $request->name,
                'email' => $request->email,
                'image' => $filenameToStore,
                'phoneNo' => $request->phoneNo,
                'city' => $request->city,
                'zip' => $request->zip,
                'about' => $request->about,
            ]);
        } else {
            DB::table('users')->where('id', $id)->update([
                'name' => $request->last_name,
                'last_name' =>  $request->name,
                'email' => $request->email,
                'phoneNo' => $request->phoneNo,
                'city' => $request->city,
                'zip' => $request->zip,
                'about' => $request->about,
            ]);
        }

       
        
        return redirect()->back()->with('success', 'Ažuriranje uspješno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user->delete();
        return back();
    }
}
