<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    /**
     * Establish many to many relationship with product
     */
    public function products()
    {
    	return $this->belongsToMany(App\Models\Product::class,'product_sale','sale_id','product_id');
    }

    /**
     * Establish one to many relationship with students
     */
    public function student()
    {
    	return $this->belongsTo(App\Models\Student::class,'student_id');
    }
}
