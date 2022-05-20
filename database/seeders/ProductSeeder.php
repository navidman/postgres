<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index)  {
            $products = array('apple', 'banana', 'brocli', 'orange');
            $categories = array('fruit', 'vegetable');
            Product::create([
                'city' => $faker->city,
                'category' => $categories[array_rand($categories)],
                'amount' => $faker->numberBetween(1000, 10000),
                'product'=> $products[array_rand($products)]
            ]);
        }
    }
}

