<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    		DB::table('products')->insert([
            'name' => str_random(10),
            'original_price' => rand(0,1000),
            'description' => str_random(10),
            'content' => str_random(10),
        ]);
    	
        
    }
}
