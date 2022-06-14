<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $name = $faker->name();
       
        $users = 5;
        for($i=0;$i<$users; $i++){
            User::create([
                'name'=> $name,
                'email'=>$faker->unique()->safeEmail(),
                 'password'=>Hash::make(12345678),
                 'role_id'=>rand(1,2)
            ]);
        }
    }
}
