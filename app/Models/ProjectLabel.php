<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProjectLabel extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'project_labels';

    protected $fillable = [
        'name',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Projects::class, 'project_id', 'id');
    }

    public function project_labels()
    {
        return $this->hasMany(Projects::class, 'project_id', 'id');
    }
}
