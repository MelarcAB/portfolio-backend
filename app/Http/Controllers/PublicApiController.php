<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
//portfolioreource
use App\Http\Resources\PortfolioResource;
use App\Http\Resources\ProjectsResource;
use App\Models\Project;

class PublicApiController extends Controller
{
    //Este controlador es para las rutas publicas de la api
    //el front podrá obtener los proyectos y portafolios sin necesidad de autenticarse
    //más adelante se implementará un sistema de autenticación para un front privado
    //donde se podrá editar la información


    /**
     * Get profile information
     *
     * By default we take the last portfolio data created
     */
    public function profile()
    {
        $portfolio = Portfolio::latest()->first();
        return response()->json(new PortfolioResource($portfolio), 200);
    }


    /**
     * Get projects
     *
     * By default we take all projects (not deleted with softdelete)
     */
    public function projects()
    {
        $projects = Project::all();

        return response()->json(ProjectsResource::collection($projects), 200);
    }
}
