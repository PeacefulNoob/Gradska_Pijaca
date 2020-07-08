<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Ad;
use DB;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct() {
        $this->middleware('admin')->except(['show', 'index','showLocation']);
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
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Categories::findOrFail($id);
        $ads = Ad::where('cat_id',$id)->get();
        $categories = Categories::all();
        $ad_location= Ad::select('location')->distinct()->get();
        $all_ads = Ad::all();


        return view('all_ads', compact('ads','categories','all_ads','ad_location','category')); 

    }
    public function showLocation($location)
    {
        $ads = Ad::where('location',$location)->get();
        $categories = Categories::all();
        $ad_location= Ad::select('location')->distinct()->get();
        $all_ads = Ad::all();


        return view('all', compact('ads','categories','all_ads','ad_location'));


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
