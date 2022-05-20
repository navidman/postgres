<?php

namespace Database\Seeders;

use App\Models\Car;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
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
            $types = array('gas', 'electric');
            $names = array('benz', 'bmw', 'toyota', 'hyunda');
            $colors = array('blue', 'black', 'white', 'red');
            Car::create([
                'name' => $names[array_rand($names)],
                'color' => $colors[array_rand($colors)],
                'age' => $faker->numberBetween(2000, 2022),
                'type'=> $types[array_rand($types)]
            ]);
        }
    }
}
