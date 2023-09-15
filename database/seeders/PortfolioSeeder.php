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
            'email' => 'marc.arino.barcelo@gmail.com',
            'description' => 'Backend Developer. Especializado en PHP y Laravel con una sólida formación en DAM y DAW. Experiencia en MySQL, API REST y metodologías ágiles como Sprints. Actualmente ampliando habilidades en React.',
            'image' => 'https://media.licdn.com/dms/image/D4E03AQHjKd0MXnxSaw/profile-displayphoto-shrink_400_400/0/1688893197288?e=1697068800&v=beta&t=8MpwcYdE4uiZ2kpnXXr_gIzP997Wb5AeWzumMYpoNTo',
            'git_url' => 'https://github.com/MelarcAB',
            'job_title' => 'Backend Developer',
            'current_company' => 'Nemon',
            'current_company_website' => 'https://nemon.io/',
            'linkedin_url' => 'https://www.linkedin.com/in/marc-arino-barcelo/',
            'city' => 'Tarragona',
            'country' => 'España',

        ]);

        //aprovechamos para añadir proyectos
        $projects = [
            [
                'name' => 'El tiempo',
                'description' => 'Consulta el tiempo de tu ciudad de los próximos días. Con React y Express',
                'image' => 'https://portfolio.melarc.dev/img/eltiempo.webp',
                'slug' => Helper::createUniqueSlug("el tiempo"),
                'git_url' => 'https://github.com/MelarcAB/weather-app',
                'demo_url' => 'https://eltiempo.melarc.dev/',
                //date now
                'created_at' => Carbon::now(),
                'date' => '2023-09-15',
                'labels' => ['React', 'Tailwindcss', 'WeatherStack API', 'Vite', 'Express'],

            ],
            [
                'name' => 'Pokédex',
                'description' => 'Pokédex hecha con React usando PokeAPI',
                'image' => 'https://portfolio.melarc.dev/img/pokedex.webp',
                'slug' => Helper::createUniqueSlug("pokedex"),
                'git_url' => 'https://github.com/MelarcAB/pokedex-pokeapi-v2',
                'demo_url' => 'https://pokedex.melarc.dev/',
                //date now
                'created_at' => Carbon::now(),
                'date' => '2023-08-10',
                'labels' => ['React', 'PokeAPI', 'API REST', 'Vite'],

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
                'date' => '2023-05-15',
                'labels' => ['Laravel', 'API REST', 'Vite', 'TailwindCSS', 'OpenAI', 'JWT'],
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
                'labels' => ['Laravel', 'Vite', 'Bootstrap', 'Websockets', 'Jquery', 'JWT'],
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
                'labels' => ['Laravel', 'Vite', 'Bootstrap', 'JWT'],
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
                'date' => '2022-10-10',
                'labels' => ['Laravel', 'Bootstrap', 'Jquery'],
            ],
            [
                'name' => 'Generador de recetas',
                'description' => 'Generador de recetas hecho con React/Laravel usando la API de OpenAI',
                'image' => 'https://portfolio.melarc.dev/img/recetas.webp',
                'slug' => Helper::createUniqueSlug("Generador de recetas"),
                'git_url' => 'https://github.com/MelarcAB/ai-recipes-front',
                'demo_url' => 'https://ai-recipes.melarc.dev/',
                'created_at' => Carbon::now(),
                'date' => '2023-08-20',
                'labels' => ['Laravel', 'Tailwindcss', 'React', 'Vite', 'OpenAI', 'SPA', 'JWT'],
            ],
        ];

        foreach ($projects as $project) {
            $labels = $project['labels'];
            unset($project['labels']);
            $project = Project::create($project);
            foreach ($labels as $label) {
                $project->labels()->create([
                    'name' => $label,
                    'project_id' => $project->id,
                ]);
            }
        }
    }
}
