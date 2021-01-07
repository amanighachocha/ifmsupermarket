<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ApiController extends Controller
{
    /**
     * Get categories list
     */
    public function getCategories(Request $request)
    {
    	// Logic
        $categories = Category::with('products')->get();

        if($categories->count() == 0){
        	return response()->json(['message'=>'Data not found','status'=>'270'],404);
        }else{
        	return response()->json(['data'=>$this->transformCategories(array ($categories))],200);
        }
    	
    }

    /**
     * Transform API results
     */
    public function transformCategories($categories)
    {
         return array_map(function($category){
            return  [
                 'name'=>$category['name'],
                 'time_created'=>$category['created_at']
                    ];
         },$categories);
    }
}
