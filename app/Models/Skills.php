<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\SkillTypes;

class Skills extends Model
{
    use HasFactory,  SoftDeletes;


    protected $table = 'skills';

    protected $fillable = [
        'name',
        'slug',
        'skill_types_id'
    ];


    public function skill_types()
    {
        return $this->belongsTo(SkillTypes::class);
    }
}
