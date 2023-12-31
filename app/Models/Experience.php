<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ExperienceType;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experiences';

    protected $fillable = [
        'title',
        'description',
        'experience_type',
        'company',
        'start_date',
        'end_date',
        'img',
    ];


    //hide id created_at and updated_at
    protected $hidden = ['id', 'created_at', 'updated_at'];

    public function getExperienceTypeAttribute($value)
    {
        if (in_array($value, ExperienceType::all())) {
            
            return $value;
        }
        // You can handle unexpected values here.
        return 'unknown';
    }
}
