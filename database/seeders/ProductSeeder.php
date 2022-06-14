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
        $count = 10;
        $products = 'product';
        $product_count = 1;

        for($i=0;$i<$count; $i++){
            Product::create([
                'name'=>  $products.$product_count++,
                'description'=> $faker->sentence(),
                'location_id'=>rand(1,2)
            ]);
        }

    }
}
