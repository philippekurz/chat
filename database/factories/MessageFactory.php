<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'expediteur_id' => User::all()->random()->id,
            'message' => $this->faker->paragraph(),
            'date_heure' => $this->faker->dateTimeBetween('-2 year', 'now'),
        ];
    }
}
