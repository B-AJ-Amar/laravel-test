<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(100)->create();
        
        $categories = Category::all();
        
        Product::all()->each(function ($product) use ($categories) { 
            $product->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
        
        
        // (function ($product) {
        //     $categories = Category::inRandomOrder()->limit(rand(1, 4))->pluck('id')->toArray();
            
        //     $product->categories()->attach($categories);
        // });
    }
}
