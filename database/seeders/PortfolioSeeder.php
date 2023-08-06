<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use App\Models\Project;
use App\Helpers\Helper;
use Carbon\Carbon;


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
            'current_company_website' => 'https://nemon2ib.io/',

        ]);

        //aprovechamos para añadir proyectos
        $projects = [
            [
                'name' => 'Pokédex',
                'description' => 'Pokédex hecha con React usando PokeAPI',
                'image' => 'https://via.placeholder.com/150',
                'slug' => Helper::createUniqueSlug("pokedex"),
                'git_url' => 'https://github.com/MelarcAB/pokedex-pokeapi-v2',
                'demo_url' => 'https://pokedex-melarc-ea378914038c.herokuapp.com/',
                //date now
                'created_at' => Carbon::now(),
                'date' => Carbon::now(),
            ],
            [
                'name' => 'ExaminAI',
                'description' => 'Aplicación que genera y corrige exámenes de inglés usando IA',
                'image' => 'https://via.placeholder.com/150',
                'slug' => Helper::createUniqueSlug("ExaminAI"),
                'git_url' => 'https://github.com/MelarcAB/ai-english-teacher',
                'demo_url' => 'https://examinai.devmelarc.com/',
                //date now
                'created_at' => Carbon::now(),
                'date' => Carbon::now(),
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
