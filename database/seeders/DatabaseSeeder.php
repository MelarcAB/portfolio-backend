<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //user seeder
        $this->call(UserSeeder::class);

        //portfolio seeder
        $this->call(PortfolioSeeder::class);

        //skills seeder
        $this->call(SkillsSeeder::class);

        $this->call(ExperiencesTableSeeder::class);
    }
}
