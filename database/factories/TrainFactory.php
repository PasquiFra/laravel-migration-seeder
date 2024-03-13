<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->company(),
            'dep_station' => fake()->city(),
            'arr_station' => fake()->city(),
            'dep_time' => fake()->time('H:i'),
            'arr_time' => fake()->time('H:i'),
            'train_code' => fake()->bothify('??-####'),
            'n_carriage' => fake()->numberBetween(1, 10),
            'on_time' => fake()->boolean(),
            'cancelled' => fake()->boolean(),
        ];
    }
}
