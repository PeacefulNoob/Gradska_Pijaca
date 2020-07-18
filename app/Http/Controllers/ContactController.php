<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $data['name'] = $request->name;
        $data['messages'] = $request->message;
        $data['email'] = $request->email;

        Mail::send('emails.message', $data, function ($message) use ($request) {

            $message->to('gradskapijaca2020@gmail.com', 'Receiver Name')
                ->from($request->email, $request->name)
                ->subject('Gradska Pijaca Website');
        });



        return redirect()->back()->with('contact', 'Uspesno ste poslali poruku! ');
    }

}
