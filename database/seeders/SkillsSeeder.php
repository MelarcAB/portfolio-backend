<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//createUniqueSlugSkillType
use App\Helpers\Helper;
use App\Models\SkillTypes;
use App\Models\Skills;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crear los tipos de skills de programador
        $types = ['frontend', 'backend', 'database', 'framework', 'library', 'other'];
        foreach ($types as $type) {
            SkillTypes::create([
                'name' => $type,
                'slug' => Helper::createUniqueSlugSkillType($type),
            ]);
        }

        //crear skills de programador

        $skills = [
            ['name' => 'HTML/CSS', 'type' => 'frontend'],
            ['name' => 'JS', 'type' => 'frontend'],
            ['name' => 'PHP', 'type' => 'backend'],
            ['name' => 'SQL', 'type' => 'database'],
            ['name' => 'MongoDB', 'type' => 'database'],
            ['name' => 'Laravel', 'type' => 'framework'],
            ['name' => 'Bootstrap', 'type' => 'library'],
            ['name' => 'JQuery', 'type' => 'library'],
            ['name' => 'Git', 'type' => 'other'],
            //redis, react, tailwindcss
            ['name' => 'Redis', 'type' => 'other'],
            ['name' => 'React', 'type' => 'frontend'],
            ['name' => 'TailwindCSS', 'type' => 'frontend'],
            //agile, scrum, kanban
            ['name' => 'Agile', 'type' => 'other'],
            ['name' => 'Scrum', 'type' => 'other'],
            ['name' => 'Kanban', 'type' => 'other'],


        ];

        foreach ($skills as $skill) {
            $skill_type = SkillTypes::where('slug', $skill['type'])->first();
            Skills::create([
                'name' => $skill['name'],
                'slug' => Helper::createUniqueSlugSkill($skill['name']),
                'skill_type_id' => $skill_type->id,
            ]);
        }
    }
}
