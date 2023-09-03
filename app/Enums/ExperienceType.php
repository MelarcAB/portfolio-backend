<?php

namespace App\Enums;

class ExperienceType
{
    const WORK = 'work';
    const EDUCATION = 'education';
    const VOLUNTEER = 'volunteer';
    const CERTIFICATION = 'certification';
    const PROJECT = 'project';
    const COURSE = 'course';

    public static function all()
    {
        return [
            self::WORK,
            self::EDUCATION,
            self::COURSE,
            self::VOLUNTEER,
            self::CERTIFICATION,
        ];
    }
}
