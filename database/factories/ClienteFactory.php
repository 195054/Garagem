<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ClienteFactory extends Factory
{

    public function definition()
    {
        $faker = Faker::create('pt_BR');
        return [
            'nome' => $faker->name,
            'telefone' => $faker->telephone,
            'endereco' => $faker->adress,
        ];

    }

}