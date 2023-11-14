<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FuncionariosTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $numeroDeFuncionarios = 60;

        for ($i = 0; $i < $numeroDeFuncionarios; $i++) {
            \DB::table('Funcionarios')->insert([
                'nome' => $faker->name,
                'data_nascimento' => $faker->date,
                'nacionalidade' => $faker->country,
            ]);
        }
    }
}
// Comando para rodar as Seeders
//php artisan db:seed --class=FuncionariosTableSeeder