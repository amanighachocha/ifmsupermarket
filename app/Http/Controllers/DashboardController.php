<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Student;
use App\Models\Product;
use App\Models\Sale;
use App\Models\User;

class DashboardController extends Controller
{
	/**
	 * Define a constructor
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display dashboard homepage
     */
    public function index()
    {
       return view('dashboard');
    }

    /**
     * Display categories list
     */
    public function showCategories()
    {
    	$data = [
           'categories'=>Category::with('products')->paginate(2),
    	];
        return view('categories',$data)->withTitle('Categories | Supermarket');
    }


    /**
     * Display students list
     */
    public function showStudents()
    {
        
    }

    /**
     * Display products list
     */
    public function showProducts()
    {

    }

    /**
     * Display users list
     */
    public function showUsers()
    {

    }

    /**
     * Display sales list
     */
    public function showSales()
    {

    }
}
