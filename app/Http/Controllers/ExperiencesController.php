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

    //Function filter, recibe un parametro de tipo array con TypeExperience y devuelve un array con las experiencias que coinciden con el parametro
    public function filter(Request $request)
    {
        try {
            //agrupo las experiencias por tipo en un array
            $types = [];
            $types_request = $request->query('type', []);
            if (!is_array($types_request)) {
                $types_request = [$types_request];
            }
            foreach ($types_request as $type) {
                array_push($types, $type);
            }
            //si no hay ningun tipo seleccionado, devuelvo arr vacio
            if (count($types) == 0) {
                return response()->json([]);
            }

            //order by start_date
            $experiences = Experience::whereIn('experience_type', $types)->orderBy('start_date', 'desc')->get();
            return response()->json($experiences);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Experience not found' . $e
            ], 404);
        }
    }
}
