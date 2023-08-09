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
            'description' => 'Backend Developer.\n Especializado en PHP y Laravel con una sólida formación en DAM y DAW. Experiencia en MySQL, API REST y metodologías ágiles como Sprints. Actualmente ampliando habilidades en React.',
            'image' => 'https://media.licdn.com/dms/image/D4E03AQHjKd0MXnxSaw/profile-displayphoto-shrink_400_400/0/1688893197288?e=1697068800&v=beta&t=8MpwcYdE4uiZ2kpnXXr_gIzP997Wb5AeWzumMYpoNTo',
            'git_url' => 'https://github.com/MelarcAB',
            'job_title' => 'Backend Developer',
            'current_company' => 'Nemon2ib',
            'current_company_website' => 'https://nemon2ib.io/',
            'linkedin_url' => 'https://www.linkedin.com/in/marc-arino-barcelo/',

        ]);

        //aprovechamos para añadir proyectos
        $projects = [
            [
                'name' => 'Pokédex',
                'description' => 'Pokédex hecha con React usando PokeAPI',
                'image' => 'https://portfolio.melarc.dev/img/pokedex.webp',
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
                'image' => 'https://portfolio.melarc.dev/img/examinai.webp',
                'slug' => Helper::createUniqueSlug("ExaminAI"),
                'git_url' => 'https://github.com/MelarcAB/ai-english-teacher',
                'demo_url' => 'https://examinai.devmelarc.com/',
                //date now
                'created_at' => Carbon::now(),
                'date' => Carbon::now(),
            ],
            //poker-planning
            [
                'name' => 'Poker Planning',
                'description' => 'Aplicación de poker planning hecha con React',
                'image' => 'https://portfolio.melarc.dev/img/poker_planning.webp',
                'slug' => Helper::createUniqueSlug("poker-planning"),
                'git_url' => 'https://github.com/MelarcAB/poker-planning',
                'demo_url' => 'https://poker-planning.devmelarc.com/',
                'created_at' => Carbon::now(),
                'date' => Carbon::now(),
            ],
            //manganol
            //app para subir comics y mangas en español y leerlos online
            [
                'name' => 'Manganol',
                'description' => 'Aplicación para subir comics y mangas en español y leerlos online',
                'image' => 'https://portfolio.melarc.dev/img/manganol.webp',
                'slug' => Helper::createUniqueSlug("manganol"),
                'git_url' => 'https://github.com/MelarcAB/manga-reader',
                'demo_url' => 'https://manganol.devmelarc.com/',
                'created_at' => Carbon::now(),
                'date' => Carbon::now(),
            ],
            //devstagram
            //curso udemy laravel clon de instagram
            //https://devstagram.devmelarc.com/
            [
                'name' => 'Devstagram',
                'description' => 'Clon de instagram hecho con Laravel (Curso UDEMY)',
                'image' => 'https://portfolio.melarc.dev/img/devstagram.webp',
                'slug' => Helper::createUniqueSlug("devstagram"),
                'git_url' => 'https://github.com/MelarcAB/devstagram',
                'demo_url' => 'https://devstagram.devmelarc.com/',
                'created_at' => Carbon::now(),
                'date' => Carbon::now(),
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
