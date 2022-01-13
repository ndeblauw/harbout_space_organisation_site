<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->city(),
            'url' => $this->faker->url(),
            'address' => $this->faker->address(),
        ];
    }
}
