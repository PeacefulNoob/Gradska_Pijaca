<?php

namespace App\Http\Controllers;

use App\Categories_post;
use Illuminate\Http\Request;
use App\Post;

class CategoriesPostController extends Controller
{
    public function __construct() {
        $this->middleware('approved')->except(['show', 'index']);
    }
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
     * @param  \App\Categories_post  $categories_post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $posts = Post::where('cat_id',$id)->get();
        $categories = Categories_post::all();
        return view('posts.blog_grid' , compact("posts","categories"));
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories_post  $categories_post
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories_post $categories_post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories_post  $categories_post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories_post $categories_post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories_post  $categories_post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories_post $categories_post)
    {
        //
    }
}
