<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Validator;

class SessionController extends Controller
{
    /**
     * Store authenticated session
     */
    public function store(Request $request)
    {
    	// Validate user input
    	$validation = Validator::make($request->all(),[
            'email'=>'email|required',
            'password'=>'required'
    	],[
           'email'=>'Incorrect email entered'
    	]);

    	// Validation check point
    	if($validation->fails()){
    		return redirect()->back()->withInput()->withErrors($validation->messages());
    	}






    	$credentials = [
           'email'=>$request->input('email'),
           'password'=>$request->input('password')
    	];
    	if(Auth::attempt($credentials)){
            return redirect()->to('categories');
    	}else{
    		session()->flash('error_message','Incorrect email or password');
    		return redirect()->back();
    	}
    }

    /**
     * Destroy session
     */
    public function destroy()
    {
    	if(Auth::check()){
    		Auth::logout();
    		return redirect()->to('/');
    	}
    }
}
