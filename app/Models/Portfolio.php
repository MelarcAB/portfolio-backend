<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;


    protected  $fillable = [
        'name',
        'description',
        'image',
        'git_url',
        'job_title',
        'current_company',
        'current_company_website',
        'city',
        'country',
        'linkedin_url',
    ];
}
