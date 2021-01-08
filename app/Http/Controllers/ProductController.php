<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Store new product
     */
    public function store(Request $request)
    {
    	 if(!Gate::allows('create-product')){
    	 	abort(403);
    	 }
    	 $product = new Product;
    	 $product->barcode = '12273839';
    	 $product->name = 'Hill Water';
    	 $product->price = 500.00;
    	 $product->quantity = 1000;
    	 $product->category_id = 1;
    	 $product->save();

    	 return "Product created successfully";
    }
}
