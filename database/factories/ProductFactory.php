<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = Category::all()->pluck('id');
        return [
            'category_id' => $this->faker->randomElement($categories),
            'name' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'sku' => $this->faker->regexify('[A-Za-z0-9]{8}'),
            'color' => $this->faker->colorName,
            'description' => $this->faker->text(200),
            'price' => $this->faker->randomFloat(null, 200, 999),
            'ratings' => 3,
        ];
    }
}
