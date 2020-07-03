<?php

namespace App\Http\Controllers;

use App\Post;
use App\Categories_post;

use App\User;
use App\Tag;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('approved')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();
        $users = User::all();
        $categories = Categories_post::all();
        return view('posts.blog_grid' , compact("posts", "tags","users","categories"));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = \App\Tag::get()->pluck('name', 'id');
        $categories = Categories_post::all();
        return view('logUser.ad_blog', compact('tags','categories'));
        
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
            'body' => 'required',
            'cover_image' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg|max:1999'
        ]);

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
            $path = $request->file('cover_image')->move(public_path('/assets/images/post_images'), $fileNameToStore);
                } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
    
        $post->save();
/*         $post->tag()->sync((array)$request->input('tag'));
 */        return redirect('/post')->with('success', 'Post Created');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::findOrFail($post->id);
        $categories = Categories_post::all();

    return view('posts.blog_details', compact('post','categories'));
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::find($id);

        if (!isset($post)) {
            return redirect('/post')->with('error', 'No Post Found');
        }

        if (auth()->user()->id !== $post->user_id) {
            return redirect('/post')->with('error', 'Unauthorized Page');
        }

        if ($post->cover_image != 'noimage.jpg') {
            Storage::delete('public/assets/images/post_images/' . $post->cover_image);
        }

        $post->delete();
        return redirect('/post')->with('success', 'Post Removed');
    }
    
    }
