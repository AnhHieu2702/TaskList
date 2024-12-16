<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Task;
class TaskSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 15; $i++) {
            Task::create([
                'title'=> $faker->title,
                'description'=>$faker->paragraph(),
                'long_description'=>$faker->optional()->text(),
                'completed'=>$faker->boolean(),
            ]);   
        }
    }
}
