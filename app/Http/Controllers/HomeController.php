<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

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

    /**
     * Change locale
     */
    public function changeLocale($locale)
    {
    	app()->setLocale($locale);
    	return redirect()->back();
    }
}
