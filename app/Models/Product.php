<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    /**
     * Establish many to many relationship with sales
     */
    public function sales()
    {
    	return $this->belongsToMany(App\Models\Sale::class,'product_sale','product_id','sale_id');
    }

    /**
     * Establish one to many relationship with categories
     */
    public function products()
    {
    	return $this->belongsTo(App\Models\Category::class,'category_id');
    }
}
