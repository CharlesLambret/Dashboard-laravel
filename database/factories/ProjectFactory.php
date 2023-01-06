<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'client_id' => fake()->unsignedBigInteger(),
        'nom_responsable'=> fake()->string(1, true),
        'email_responsable' => fake()->string(1, true),
        'telephone_responsable' => fake()->string(1, true),
        'titre' => fake()->string(1, true),
        'description' => fake()->text(),
        'debut' => fake()->date(),
        'fin' => fake()->date(),
        'statut' => fake()->enum(),
        'jours_vendus' => fake()->integer(),
        'slug' => fake()->string(1, true)->unique(),
        ];
    }
}

