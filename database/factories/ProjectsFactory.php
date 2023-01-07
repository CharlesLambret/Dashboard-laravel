<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use database\factories\ClientFactory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        
        return [
        'client_id' => function(){
            return Client::inRandomOrder()->first()->id;
        },
        'nom_responsable'=> fake()->words(1, true),
        'prenom_responsable'=>fake()->words(1,true),
        'email_responsable' => fake()->words(1, true),
        'telephone_responsable' => fake()->phoneNumber(),
        'titre_projet' => fake()->company(),
        'description' => fake()->text(),
        'debut' => fake()->date(),
        'fin' => fake()->date(),
        'statut' => fake()->text(),
        'jours_vendus' => fake()->randomNumber(2, false),
       
       
        ];
    }
}

