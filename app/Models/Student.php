<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    /**
     * Establish one to many relationship with sales
     */
    public function sales()
    {
    	return $this->hasMany(App\Models\Sale::class,'sale_id');
    }
}
