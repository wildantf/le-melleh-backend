<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert(
            ['name' => 'Sport'],
        );
        DB::table('product_categories')->insert(
            ['name' => 'Hiking'],
        );
        DB::table('product_categories')->insert(
            ['name' => 'Basketball'],
        );
        DB::table('product_categories')->insert(
            ['name' => 'Training'],
        );
        DB::table('product_categories')->insert(
            ['name' => 'Running'],
        );
        DB::table('product_categories')->insert(
            ['name' => 'All Shoes'],
        );
    }
}
