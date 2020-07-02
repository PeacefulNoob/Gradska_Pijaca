<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin.home');
    }
    public function allUsers()
        {
            $users = User::all();
            return view('admin.users-all')->with('users',$users);
        }


        public function show($id)
        {
            $ads = Ad::all();
            return view('admin.ads', compact('ads')); 

        }


}
