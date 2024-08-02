<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class EventFactory extends Factory
{

    public function definition(): array
    {
        return [
                'title' => $this->faker->sentence,
                "description" => $this->faker->paragraph,
                'disponibility' => $this->faker->boolean,
                'price' => $this->faker->numberBetween(100, 1000),
                "category_id" => $this->faker->numberBetween(1, \App\Models\Category::count())
        ];
    }
}