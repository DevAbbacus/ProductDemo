<?php

namespace Database\Factories;

use App\Models\AgeGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ageGroup = AgeGroup::all()->pluck('id');
        return [
            'name' => $this->faker->text(10),
            'age_group_id'  => $this->faker->randomElements($ageGroup, 4),
        ];
    }
}
