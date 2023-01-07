<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'client_raison_sociale'=>fake()->company(),
        'description' => fake()->sentences(2, true),
        'statut_juridique'=> fake()->sentences(3, true),
        'capital' => fake()->buildingNumber(),
        'numero_de_siret' => fake()->sentences(2, true),
        'codeNAF' => fake()->sentences(1, true),
        'adresse_siege_social' => fake()->streetName(),
        'pays' => fake()->city(),
        'adresse' => fake()->text(),
        'code_postale' => fake()->buildingNumber(),
        'ville' => fake()->sentences(1, true),
      


        ];
    }
}
