<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         \App\Models\User::create([
            'name'=>'BK ines',
            'email'=>'ines@gmail.com',
            'password'=>bcrypt('123456'),
            'profile_img'=>'profile_img1.jpg',
            'is_admin' => true
        ]);
        
    }
}
