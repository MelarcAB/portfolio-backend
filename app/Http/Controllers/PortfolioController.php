<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //implementar todas las funciones
    public function index()
    {
        return response()->json(['message' => 'index']);
    }

    public function show($id)
    {
        return response()->json(['message' => 'show']);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'store']);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => 'update']);
    }

    public function destroy($id)
    {
        return response()->json(['message' => 'destroy']);
    }
}
