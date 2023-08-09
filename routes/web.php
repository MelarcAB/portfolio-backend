<?php

use Illuminate\Support\Facades\Route;

use App\Models\Skills;

Route::get('/', function () {
    $projects = Skills::all();
    foreach ($projects as $project) {
        echo $project->name . '-' . $project->skill_types . '<br>';
    }
});
