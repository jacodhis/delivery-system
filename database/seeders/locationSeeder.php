<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class locationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = ['Nairobi','Mombasa'];
      
        foreach($locations as $location){
            Location::create([
                'name'=>$location,
            ]);
        }
           
       
        
    }
}
