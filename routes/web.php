<?php

use Illuminate\Support\Facades\Route;

use App\Models\Skills;

Route::get('/', function () {
    $html = "<img src='" . asset('img/manganol.webp') . "' alt=''>";
    return $html;
});
