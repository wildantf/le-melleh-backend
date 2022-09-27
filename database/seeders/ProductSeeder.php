<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_category = ProductCategory::factory()->create();

        $products = Product::factory()
            ->count(5)
            ->for($product_category,'category')
            ->create();
        // var_dump($products);
        $product_galleries = ProductGallery::factory()
            ->count(5)
            ->for($products)
            ->create();

        
    }
}
