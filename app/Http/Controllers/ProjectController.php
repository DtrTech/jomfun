<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Browsershot\Browsershot;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Project;
use App\Models\Category;
use Bouncer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::all();
        $categories = Category::all();

        return view('project.index')->with('projects', $projects);
    }

    public function create()
    {
        $categories = Category::all();
        return view('project.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'page_seo' => 'required|string',
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
            'publish_time' => 'required|date',
            'status' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Project::create($validated);

        return redirect()->route('project.index')->withSuccess('Data saved');
    }

    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('project.create', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'page_seo' => 'required|string',
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
            'publish_time' => 'required|date',
            'status' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $project->update($validated);

        return redirect()->route('project.index')->withSuccess('Data updated');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index')->withSuccess('Data deleted');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/summernote', $filename, 'public'); // save in storage/app/public/uploads/summernote

            return response()->json([
                'url' => asset('storage/' . $path) // return file URL
            ]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }
}
