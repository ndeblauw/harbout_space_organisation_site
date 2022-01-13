<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'subtitle' => $this->faker->words(rand(3, 7), true),
            'description' => $this->faker->randomHtml(2, 3),
            'begin_date' => ($start = now()->addDays(rand(-100, 100))),
            'end_date' => $start->addMinutes(rand(90, 150)),
            'location_id' => rand(1, 10),
        ];
    }
}
