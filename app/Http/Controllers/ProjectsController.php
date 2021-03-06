<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Project $project)
    {
        // Classical way
            // $project = new Project();
            // $project->title = request('title');
            // $project->description = request('description');
            // $project->save();
        // Laravel feature
            // return request()->all();
            // Project::create(request(['title', 'description']));
        request()->validate()([
            'title' => 'required',
            'description' => 'required'
        ]);
        Project::create(request(['title', 'description']));
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Project $project) // will be used for route model binding.
    public function update(Project $project)
    {
        // New laravel method
        $project->update(request(['title', 'description']));
        // Classical way
            // $project->title = request('title'); // Grab the user's input
            // $project->description = request('description'); // Grab the user's input
            // $project->save(); // Save it to the db
        
        return redirect('/projects'); // Redirect to projects view.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects'); // Redirect to projects view.
    }
}
