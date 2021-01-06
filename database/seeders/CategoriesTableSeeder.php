<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use DateTime;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
	           'name'=>'Stationaries',
	           'created_at'=>new DateTime,
	           'updated_at'=>new DateTime
            ],
            
            [
	           'name'=>'Drinks',
	           'created_at'=>new DateTime,
	           'updated_at'=>new DateTime
            ],

            [
	           'name'=>'Snacks',
	           'created_at'=>new DateTime,
	           'updated_at'=>new DateTime
            ],

            [
	           'name'=>'Fruits',
	           'created_at'=>new DateTime,
	           'updated_at'=>new DateTime
            ]

        ];


        Category::insert($data);
    }
}
