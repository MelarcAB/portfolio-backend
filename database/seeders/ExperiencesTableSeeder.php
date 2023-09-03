<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;
use App\Enums\ExperienceType;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'title' => 'Desarrollo de Apliaciones Web',
            'description' => 'Desarrollo de aplicaciones web (DAW)',
            'company' => 'INS Francesc Vidal i Barraquer',
            'start_date' => '2017-09-01',
            'end_date' => '2018-06-01',
            'experience_type' => ExperienceType::EDUCATION,
        ]);

        Experience::create([
            'title' => 'Desarrollo de Aplicaciones Multiplataforma',
            'description' => 'Desarrollo de aplicaciones multiplataforma (DAM)',
            'company' => 'INS Francesc Vidal i Barraquer',
            'start_date' => '2015-09-01',
            'end_date' => '2017-06-01',
            'experience_type' => ExperienceType::EDUCATION,
        ]);

        //work Eldine, 2017-2019/04
        Experience::create([
            'title' => 'Desarrollador Web',
            'description' => 'Desarrollo de aplicaciones web con PHP y JS',
            'company' => 'Eldine',
            'start_date' => '2017-09-01',
            'end_date' => '2020-04-01',
            'experience_type' => ExperienceType::WORK,
        ]);

        //work Nemon2ib 2020/09-2021/03
        Experience::create([
            'title' => 'Desarrollador Web',
            'description' => 'Desarrollo de aplicaciones web. Laravel, MYSQL, MongoDB',
            'company' => 'Nemon2ib',
            'start_date' => '2020-09-01',
            'experience_type' => ExperienceType::WORK,
        ]);
    }
}
