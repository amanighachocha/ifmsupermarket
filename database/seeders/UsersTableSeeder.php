<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash, DateTime;

class UsersTableSeeder extends Seeder
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
              'name'=>'Daniel',
              'email'=>'chaupele@hotmail.com',
              'password'=>Hash::make('12345678'),
              'phone'=>'+255752310155',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ],

           [
              'name'=>'Amani',
              'email'=>'amanighachocha@gmail.com',
              'password'=>Hash::make('12345678'),
              'phone'=>'+255759623399',
              'created_at'=>new DateTime,
              'updated_at'=>new DateTime
           ]
        ];

        User::insert($data);
    }
}
