<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ConversationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            'creator_id' => $this->faker->numberBetween(1, 10),
            'interlocuteur1_id' => $this->faker->numberBetween(1, 10),
            'interlocuteur2_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}