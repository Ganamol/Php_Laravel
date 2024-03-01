<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'manu',
            'email'=>'manu@gmail.com',
            'dob'=>'2000/2/2',
        ]);
        User::create([
            'name'=>'anu',
            'email'=>'anu@gmail.com',
            'dob'=>'2000/2/2',
        ]);
        
    }
}
