<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('project.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->nome = $data['nome'];
        $newProject->cliente = $data['cliente'];
        $newProject->type_id = $data['type_id'];
        $newProject->periodo = $data['periodo'];
        $newProject->riassunto = $data['riassunto'];

        $newProject->save();

        return redirect()->route('project.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {

        // dd($project->type);
        $types = Type::all();
        return view('project.edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->nome = $data['nome'];
        $project->cliente = $data['cliente'];
        $project->type_id = $data['type_id'];
        $project->periodo = $data['periodo'];
        $project->riassunto = $data['riassunto'];

        $project->update();

        return redirect()->route('project.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index');
    }
}
