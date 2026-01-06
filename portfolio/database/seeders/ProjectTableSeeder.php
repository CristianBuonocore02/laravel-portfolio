<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $newProj = new Project();
            $newProj->nome = $faker->name();
            $newProj->cliente = $faker->name();
            $newProj->periodo = $faker->dateTime('Y-m');
            $newProj->riassunto = $faker->paragraph();

            $newProj->save();
        }
    }
}
