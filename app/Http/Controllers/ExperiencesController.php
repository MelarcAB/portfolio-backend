<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Enums\ExperienceType;
use Exception;

class ExperiencesController extends Controller
{

    public function index()
    {
        //devolver ordenado por fecha de inicio
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        return response()->json($experiences);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    }


    public function show($slug)
    {
        try {
            $experience = Experience::where('slug', $slug)->firstOrFail();
            return response()->json($experience);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Experience not found'
            ], 404);
        }
    }


    public function edit($id)
    {
        //
    }
}
