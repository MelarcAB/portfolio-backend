<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use App\Models\Project;
use App\Models\SkillTypes;
use App\Models\Skills;



class Helper
{
    /**
     * Create a unique slug.
     *
     * @param string $name
     * @return string
     */
    public static function createUniqueSlug(string $name): string
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;

        $counter = 1;
        while (Project::query()->where('slug', '=', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }

    //unique slug for skill types
    public static function createUniqueSlugSkillType(string $name): string
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;

        $counter = 1;
        while (SkillTypes::query()->where('slug', '=', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }

    //unique slug for skills
    public static function createUniqueSlugSkill(string $name): string
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;

        $counter = 1;
        while (Skills::query()->where('slug', '=', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }
}
