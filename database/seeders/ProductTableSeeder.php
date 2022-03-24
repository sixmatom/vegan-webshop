<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
        [
            'name' => 'Red Shoe',
            'description' => 'Shoe that is red',
            'price' => '300',
            'type_id' => '1',
            // 'created_by' => 1,
        ],
        [
            'name' => 'Blue Shoe',
            'description' => 'Shoe that is Blue',
            'price' => '290',
            'type_id' => '1',
            // 'created_by' => 1,
        ],
        [
            'name' => 'White Shirt L',
            'description' => 'Shirt that is white and large',
            'price' => '150',
            'type_id' => '2',
            // 'created_by' => 1,
        ],
        [
            'name' => 'Blue Pants S',
            'description' => 'Small blue pants',
            'price' => '230',
            'type_id' => '3',
            // 'created_by' => 1,
        ],
    ];

        foreach($products as $product) {
            \App\Models\Product::create($product);
        }

    }
}
