<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name'=>'gana',
        'email'=>'gana@gmail.com',
        'dob'=>'1999-2-3',
       ]);
       User::create([
        'name'=>'m',
        'email'=>'m@gmail.com',
        'dob'=>'1999-2-3',
       ]);
    }
}
