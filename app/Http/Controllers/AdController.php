<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Categories;
use App\User;
use App\Tag;
use DB;
use Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;




use Illuminate\Http\Request;

class AdController extends Controller
{

    public function __construct()
    {       
         $this->middleware('approved')->except('show');
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

        return view('all', compact('ads','categories'));
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
            'image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg|required'
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
            $fileNameToStore = 'noimage.jpg';
        }


        // Create ad
        $ad = new Ad;
        $ad->title = $request->input('title');
        $ad->cat_id = $request->input('cat_id');
        $ad->description = $request->input('description');
        $ad->location = $request->input('location');
        $ad->user_id = auth()->user()->id;
        $ad->image = $fileNameToStore;
        $ad->save();


/*         dd((array)$request->input('tag'));
 */        $ad->tags()->sync((array)$request->input('tag'));

      
        return redirect('/')->with('success', 'Ad Created');

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
        $ads = DB::table('ads')->where('id', '=', $ad->cat_id)->get();
        $user = User::find($ad->user_id);
        return view('ad_info',compact('ad','ads','user','categories'));
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
    }
 
