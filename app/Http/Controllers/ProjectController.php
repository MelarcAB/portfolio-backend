<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\Project\StoreRequest;

class ProjectController extends Controller
{
    //generacion del controlador ProjectController para la API
    //creacion del metodo index para obtener todos los proyectos
    public function index()
    {
        return Project::all();
    }

    //creacion del metodo show para obtener un proyecto especifico
    public function show(Project $project)
    {
        return $project;
    }

    //creacion del metodo store para crear un proyecto nuevo
    public function store(StoreRequest $request)
    {

        $project = Project::create($request->all());

        return response()->json($project, 201);
    }

    //creacion del metodo update para actualizar un proyecto
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return response()->json($project, 200);
    }

    //creacion del metodo delete para eliminar un proyecto
    public function delete(Project $project)
    {
        $project->delete();

        return response()->json(null, 204);
    }
}
