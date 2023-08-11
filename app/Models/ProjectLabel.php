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
    ];

    //ocultar id deleted created y updated
    protected $hidden = [
        'id',
        'deleted_at',
        'created_at',
        'updated_at',
        'project_id'

    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}
