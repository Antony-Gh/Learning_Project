<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
     public function run(): void
     {
          $stages = [
               [
                    'title' => 'Atomic Structure',
                    'description' => 'Explore the building blocks of matter — atoms, protons, neutrons, and electrons. Learn about atomic number, mass number, and electron configuration.',
                    'order' => 1,
                    'time_limit_minutes' => 10,
                    'passing_percentage' => 75,
                    'points_reward' => 100,
               ],
               [
                    'title' => 'Chemical Bonding',
                    'description' => 'Understand how atoms bond together through ionic, covalent, and metallic bonds. Explore electronegativity and molecular geometry.',
                    'order' => 2,
                    'time_limit_minutes' => 12,
                    'passing_percentage' => 75,
                    'points_reward' => 120,
               ],
               [
                    'title' => 'Reactions & Equations',
                    'description' => 'Master chemical reactions, balancing equations, types of reactions, and stoichiometry fundamentals.',
                    'order' => 3,
                    'time_limit_minutes' => 15,
                    'passing_percentage' => 75,
                    'points_reward' => 140,
               ],
               [
                    'title' => 'Acids, Bases & pH',
                    'description' => 'Dive into acids, bases, pH scale, neutralization reactions, and buffer solutions.',
                    'order' => 4,
                    'time_limit_minutes' => 12,
                    'passing_percentage' => 75,
                    'points_reward' => 150,
               ],
               [
                    'title' => 'Organic Chemistry',
                    'description' => 'Introduction to carbon compounds, hydrocarbons, functional groups, and naming conventions in organic chemistry.',
                    'order' => 5,
                    'time_limit_minutes' => 15,
                    'passing_percentage' => 75,
                    'points_reward' => 200,
               ],
          ];

          foreach ($stages as $stage) {
               Stage::create($stage);
          }
     }
}
