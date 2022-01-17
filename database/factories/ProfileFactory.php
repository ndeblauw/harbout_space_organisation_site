<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    public function definition()
    {
        return [
            'telephone' => $this->faker->phoneNumber(),
            'favourite_muppet' => $this->faker->name(),
        ];
    }
}
