<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    /**
     * Store sale
     */
    public function store(Request $request)
    {  
    	$validation = Validator::make($request->all(),[
             'student_id'=>'required',
             'amount'=>'required|numeric'
    	]);

    	if($validation->fails()){
    		return redirect()->back()->withInput()->withErrors($validation->messages());
    	}
    	// Persist new sale in the database
    	$sale = new Sale;
    	$sale->student_id = $request->input('student_id');
    	$sale->receipt_no = rand(1000,100000);
    	$sale->amount = $request->input('amount');
    	$sale->save();


    	// Store product sale




    	// Invoke an event for completing a sale
    	event(new SaleRegistered($sale));


    }
}
