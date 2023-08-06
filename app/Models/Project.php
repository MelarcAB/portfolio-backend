<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//soft delete
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;


    protected  $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'git_url',
        'demo_url',
        'date',

    ];
}
