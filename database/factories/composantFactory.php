<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\composant>
 */
class composantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {						
        return [
            
            'name' => fake()->name(),
            'type' => fake()->name(),
            'serial_number' => fake(),
            'quantite' => fake()->text(),
            'prix_achat' => fake()->text(),
            'prix_vente' => fake()->text(),
            'date_achat' => fake()->date(),
            'emplacement' => fake()->text(),
            'image'=>fake()->image(),

        ];
    }
      /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

