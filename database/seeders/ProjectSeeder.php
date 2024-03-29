<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Project;

// Helpers
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            Project::create([
                'title' => $faker->sentence(4),
                'stars' => $faker->numberBetween(0, 100),
                'commits' => $faker->numberBetween(0, 100),
                'type' => $faker->word(),
            ]);
        }
    }
}
