<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_season')->insert([
            [
                'product_id' => 1, // 商品ID
                'season_id' => 3, // 季節ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'season_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'season_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'season_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 4,
                'season_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 5,
                'season_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 6,
                'season_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 6,
                'season_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 7,
                'season_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 7,
                'season_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 8,
                'season_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 8,
                'season_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 9,
                'season_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 10,
                'season_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 10,
                'season_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
