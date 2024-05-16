<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\Fabricator;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            $category = $faker->randomElements(['Alat Mandi', 'Makanan', 'Minuman', 'Pakaian']);
            $data = [
                'name' => $faker->word(),
                'category'    => $category,
                'price'    =>  $faker->randomNumber(5, true),
                'stock'    => $faker->numberBetween(10, 300),
            ];
            $this->db->table('products')->insert($data);
        }
    }
}
