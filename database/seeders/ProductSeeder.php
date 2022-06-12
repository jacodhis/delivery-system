<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $products = 10;

        for($i=0;$i<$products; $i++){
            Product::create([
                'name'=>  $faker->name(),
                'description'=> $faker->sentence(),
                'location_id'=>rand(1,2)
            ]);
        }

    }
}
