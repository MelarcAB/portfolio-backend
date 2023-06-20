<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'name' => 'Marc Ariño Barceló',
            'description' => 'This is my portfolio. Welcome noseque',
            'image' => 'https://via.placeholder.com/150',
            'git_url' => 'https://github.com/MelarcAB',
            'job_title' => 'FullStack Web Developer',
            'current_company' => 'Nemon2ib',

        ]);
    }
}
