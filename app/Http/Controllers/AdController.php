<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Categories;
use App\User;
use App\Tag;
use App\Like;
use Illuminate\Support\Facades\Auth;

use DB;
use Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;




use Illuminate\Http\Request;

class AdController extends Controller
{

    public function __construct()
    {       
         $this->middleware('approved')->except(['show', 'like']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::all();
        $categories = Categories::all();
        $all_ads = Ad::all();
        $ad_location= Ad::select('location')->distinct()->get();

        return view('all', compact('ads','categories','all_ads','ad_location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        $tags=Tag::all();

        return view('logUser.ad_posts2', compact("categories","tags"));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'location' => 'required',
            'cat_id' => 'required',
            'description' => 'required',
            'cover_image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg'

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


  

       // Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
             Image::make($request->file('cover_image'))->resize(500, null, function($constraint) {  $constraint->aspectRatio();}) ->save('assets/images/ad_images/'.$fileNameToStore);
                } else {
            $fileNameToStore = 'noimage.jpg';
        }


        // Create ad
        $ad = new Ad;
        $ad->title = $request->input('title');
        $ad->cat_id = $request->input('cat_id');
        $ad->description = $request->input('description');
        $ad->location = $request->input('location');
        $ad->image = $fileNameToStore;
        $ad->user_id = auth()->user()->id;

        $ad->save();


       $ad->tags()->sync((array)$request->input('tag'));


            if ($request->hasFile('image')) 
            {  
                foreach($request->file('image') as $image)
                {
                    $name=$image->getClientOriginalName();
                    Image::make($image)->resize(500, null, function($constraint) {  $constraint->aspectRatio();}) ->save('assets/images/ad_images/'.$name);
                    $data[] = $name;  
                    $image1 = new Image;
                    $image1->title=json_encode($data);     
                    DB::table('images')
                        ->insert(
                            ['title' => $name,
                            'ad_id' => $ad->id]
                        );
                }
               
                }
        return redirect()->back()->with('success', 'Ažuriranje uspješno');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categories::all();
    
        $ad = Ad::findOrFail($id);
        $ad->increment('views');
        $cat_ads = DB::table('ads')->where('cat_id', '=', $ad->cat_id)->get();
        $user = User::find($ad->user_id);
        $images = DB::table('images')->where('ad_id', '=', $id)->get();
        $all_ads = Ad::all();
        $ad_location= Ad::select('location')->distinct()->get();
        return view('ad_info',compact('ad','cat_ads','user','categories','images','all_ads','ad_location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad::findOrFail($id);
        $categories = Categories::all();
        return view('logUser.edit_ad',compact('categories','ad'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
      
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'cat_id' => 'required',
            'image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg|max:1999'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // Handle File Upload
        if ($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            Image::make($request->file('image'))->resize(500, null, function($constraint) {  $constraint->aspectRatio();}) ->save('assets/images/ad_images/'.$fileNameToStore);

                } else {
            $fileNameToStore = $ad->image;
        }

        DB::table('ads')->where('id', $ad->id)->update([
            'title' => $request->title,
            'location' => $request->location,
            'cat_id' => $request->cat_id,
            'description' => $request->description,
            'image' => $fileNameToStore,
        ]);
        


        return redirect()->back()->with('success', 'Ažuriranje uspješno');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::find($id);

        if (!isset($ad)) {
            return redirect('/')->with('error', 'No Post Found');
        }

        if (auth()->user()->id !== $ad->user_id) {
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        if ($ad->image != 'noimage.jpg') {
            Storage::delete('public/assets/images/ad_images/' . $ad->image);
        }

        $ad->delete();
        return redirect()->back()->with('success', 'Brisanje uspješno');
    }

    public function like($id)
    {
        $likePost = Like::updateOrCreate([
                'user_id' => Auth::user()->id,
                'ad_id' => $id
        ]);
        if($likePost){
            return redirect()->back()->with('success', 'Uspješno ste lajkovali oglas');
        }else{
            return redirect()->back()->with('error', 'Lajkovanje neuspješno');
        }
       

       
    }
    }
 

 
