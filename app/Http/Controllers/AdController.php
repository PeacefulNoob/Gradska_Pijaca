<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Categories;
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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();

        return view('logUser.ad_posts2', compact("categories"));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg|max:1999'
        ]);

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
           $path = $request->file('image')->move(public_path('images/ad_images'), $fileNameToStore);

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
/*         $post->tag()->sync((array)$request->input('tag'));
 */        
        return redirect('/')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = Ad::findOrFail($id);

        return view('ad_info')->with('ad', $ad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        return view('logUser.edit_ad');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        //
    }

    
}
