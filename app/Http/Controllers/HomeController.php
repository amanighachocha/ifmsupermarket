<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display home page
     */
    public function index()
    {
    	$data = [
            'name'=>'Daniel'
    	];
    	return view('index',$data);
    }
}
