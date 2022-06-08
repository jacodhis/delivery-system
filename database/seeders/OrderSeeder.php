<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $customers = 10;
        
        for($i=0;$i<$customers;$i++){
            Order::create([
                'user_id'=>rand(1,10),
                'product_id'=>rand(1,10),
                'status_id'=>rand(1,6)
            ]);
        }
    }
}
