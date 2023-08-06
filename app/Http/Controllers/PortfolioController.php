<?php

namespace App\Http\Controllers;

use App\Http\Requests\Portfolio\StoreRequest;
use App\Http\Requests\Portfolio\UpdateRequest;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Helpers\Helper;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    //implementar todas las funciones
    public function index()
    {
        return Portfolio::all();
    }

    public function show(Portfolio $portfolio)
    {
        return $portfolio;
    }

    public function store(StoreRequest $request)
    {
        $portfolio = Portfolio::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'git_url' => $request->git_url,
            'job_title' => $request->job_title,
            'current_company' => $request->current_company,

        ]);

        return response()->json($portfolio, 201);
    }

    public function update(UpdateRequest $request, Project $project)
    {
        $project->update($request->all());
        return response()->json($project, 200);
    }

    public function destroy($id = 0)
    {
        //validar si existe
        if (!Portfolio::find($id)) {
            return response()->json(['message' => 'No se encontro el portfolio'], 404);
        }
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        return response()->json(null, 204);
    }
}
