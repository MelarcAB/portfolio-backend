<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Skills;

class SkillTypes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'skill_types';


    protected $fillable = [
        'name',
        'slug'
    ];

    public function skills()
    {
        return $this->hasMany(Skills::class, 'skill_types_id', 'id');
    }
}
