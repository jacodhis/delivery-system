<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $statuses = config('settings.status');

        foreach($statuses as $status){
            Status::create([
                'name'=>$status,
                'description'=> $faker->sentence(),
            ]);
        }
        
        
    }
}
