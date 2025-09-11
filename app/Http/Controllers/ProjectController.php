<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Browsershot\Browsershot;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Project;
use Bouncer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::all();

        return view('project.index')->with('projects', $projects);
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
            'publish_date' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            // 'project_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // if ($request->hasFile('project_image')) {
        //     $path = $request->file('project_image')->store('public-images', 'public');
        //     $validated['project_image'] = asset('storage/' . $path);
        // }

        Project::create($validated);

        return redirect()->route('project.index')->withSuccess('Data saved');
    }

    public function edit(Project $project)
    {
        return view('project.create')->with('project',$project);
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
            'publish_date' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            // 'project_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // if ($request->hasFile('project_image')) {
        //     $path = $request->file('project_image')->store('public-images', 'public');
        //     $validated['project_image'] = asset('storage/' . $path);
        // }

        $project->update($validated);

        return redirect()->route('project.index')->withSuccess('Data updated');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index')->withSuccess('Data deleted');
    }
}
