<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectsController extends Controller
{
    //
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function store()
    {
        $attribute = request()->validate([
            'description' => 'required',
            'title' => 'required',
        ]);


        auth()->user()->projects()->create($attribute);

        return redirect('projects');
    }

}
