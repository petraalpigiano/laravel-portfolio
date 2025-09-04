<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type')->get();
        return response()->json([
            'success' => true,
            'data' => $projects
        ]);
    }
    public function show($id)
    {
        $project = Project::find($id);
        $project->load('technologies', 'type');
        return response()->json([
            'success' => true,
            'data' => $project
        ]);
    }
}
