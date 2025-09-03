<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isInt;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        // dd($projects);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();
        // dd($types);
        // dd($technologies);
        return view('projects.create', compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->all(); // non posso fare ::all() perche non è un metodo statico 
        // dd($data);
        // dd($data['technologies']);
        $project = new Project();

        $project->title = $data['title'];
        $project->note = $data['note'];
        $project->type_id = $data['type_id'];

        // dd($data);

        $project->save();
        if ($request->has('technologies')) {
            $project->technologies()->attach($data['technologies']);
        } else {
            $project->technologies()->detach();
        }


        return redirect()->route('projects.show', $project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

        // dd($project->technologies());


        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        // dd($project);
        $types = Type::all();
        $technologies = Technology::all();
        // dd($technologies);
        return view('projects.edit', compact('project', 'types', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        // dd($request);
        $data = $request->all();
        // dd($data);
        // dd($project);


        $project->title = $data['title'];
        $project->note = $data['note'];
        $project->type_id = $data['type_id'];
        // dd($project);

        $project->update();
        // dd($data['technologies']);

        $project->technologies()->sync($data['technologies']);

        return redirect()->route('projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
