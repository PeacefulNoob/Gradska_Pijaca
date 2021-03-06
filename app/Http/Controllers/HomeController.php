<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ad;
use DB;

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
        $users = User::all();

        return view('admin.users_all')->with('users',$users);
    }
    public function allUsers()
        {
            $users = User::all();

            return view('admin.users_all')->with('users',$users);
        }


        public function show($id)
        {
            $ads = Ad::all();
     
            return view('admin.ads', compact('ads')); 

        }
        public function update(Request $request,$id)
        {
            DB::table('users')->where('id', $id)->update([
                'approved' => $request->approved,
              
            ]);
            
    
    
            return redirect()->back()->with('success', 'Ažuriranje uspješno');
        }
}
