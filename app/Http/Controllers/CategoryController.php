<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Browsershot\Browsershot;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Category;
use Bouncer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        return view('category.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('category_image')) {
            $path = $request->file('category_image')->store('public-images', 'public');
            $validated['category_image'] = asset('storage/' . $path);
        }

        Category::create($validated);

        return redirect()->route('category.index')->withSuccess('Data saved');
    }

    public function edit(Category $category)
    {
        return view('category.create')->with('category',$category);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('category_image')) {
            $path = $request->file('category_image')->store('public-images', 'public');
            $validated['category_image'] = asset('storage/' . $path);
        }

        $category->update($validated);

        return redirect()->route('category.index')->withSuccess('Data updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->withSuccess('Data deleted');
    }
}
