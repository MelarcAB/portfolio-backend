<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Skills;
use App\Http\Resources\SkillResource;

class SkillsController extends Controller
{

    function index()
    {
        return response()->json(SkillResource::collection(Skills::all()), 200);
    }
}
