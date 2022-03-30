<?php

namespace Database\Factories;

use App\Models\Tomproducts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tomproducts>
 */
class TomproductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'color' => $this->faker->hexColor(),
            'imagepath' => $this->faker->imageUrl(125,125), //
        ];
    }
}