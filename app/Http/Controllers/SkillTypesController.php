<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkillTypes;
use App\Http\Resources\SkillTypesResource;

class SkillTypesController extends Controller
{
    ///crud
    public function index()
    {
        return response()->json(SkillTypesResource::collection(SkillTypes::all()), 200);
    }
}
