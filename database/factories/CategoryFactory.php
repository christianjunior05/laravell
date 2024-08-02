<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CategoryFactory extends Factory
{
    public function category(){
        return [
            'name' =>$this->faker ->word
        ];
    }
}