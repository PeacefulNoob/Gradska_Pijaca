<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Categories;

use Illuminate\Http\Request;
use Validator;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();
        $tags = DB::table('tags')->orderBy('id', 'desc')->get();


        return view('tags.ad_tag' , compact("posts", "tags"));
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
            'post_id' => 'required',
            'tag_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
    
      
        // Create Post
        $ad_tag = new Post;
        $ad_tag->tag_id = $request->input('tag_id');
        $ad_tag->post_id = $request->input('post_id');
   
        $post->save();

        return redirect('')->with('success', 'Tag Connected');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tags = Tag::findOrFail($id);

      
        $categories = Categories::all();

        return view('tag_ad', compact('tags','categories'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
