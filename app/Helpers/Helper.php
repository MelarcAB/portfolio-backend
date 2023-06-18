<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use App\Models\Project;



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
}
