<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Setup;
use App\Models\Banner;
use App\Models\PageView;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $projects = Project::select('id', 'title', 'author', 'publish_time', 'project_image', 'author_image', 'category_name', 'sub_title')
            ->where('status', 'active')
            ->orderBy('publish_time', 'desc')
            ->paginate(5)
            ->through(function ($project) {
                $project->publish_time = Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title_short = Str::words($project->title, 10, '');
                $project->slug = Str::slug($project->title_short);
                $project->sub_title_short = Str::words($project->sub_title, 10, '');
                $project->sub_slug = Str::slug($project->sub_title_short);
                return $project;
            });

        $categories = Category::select('id', 'category_name')->orderBy('id')->get();

        $randomProjects = collect();

        foreach ($categories as $category) {
            $project = Project::where('status', 'active')
                ->where('category_name', $category->category_name)
                ->inRandomOrder()
                ->first();
            if ($project) {
                $randomProjects->push($project);
            }
        }

        if ($randomProjects->count() < 5) {
            $additionalProjects = Project::where('status', 'active')
                ->inRandomOrder()
                ->limit(5 - $randomProjects->count())
                ->get();
            $randomProjects = $randomProjects->merge($additionalProjects);
        }

        $randomProjects = $randomProjects->unique('id')->values()->take(4)->map(function ($project) {
            $project->publish_time = Carbon::parse($project->publish_time)->format('Y-m-d');
            $project->title_short = Str::words($project->title, 10, '');
            $project->slug = Str::slug($project->title_short);
            return $project;
        });

        $setup = \App\Models\Setup::getFirstSetup();

        return view('welcome.welcome', compact('projects', 'categories', 'randomProjects', 'setup'));
    }

    public function trackEvent(Request $request)
    {
        \Log::info('TrackEvent called', $request->all()); // Log request payload

        $accessToken = 'EAAS2LfiyccwBPWONriJm7sNP1nSKFlF12u5nXXpRLIhuqKKnSNSgJLmlK8ljdcKreA625FlTNKsTXFyyr8QqkKNQLZAWNOBp6iTnZCc2imp7XTrgEUT9AL6rpA3u7RLUlNRiS9rxZCkF8vb8bsGr91mIj2ZBGsrKFgkG6qFj0GKyqmWao403bWpjJqZCrACiQFgZDZD';
        $pixelId = '798429406470275';

        $data = [
            'data' => [[
                'event_name' => 'Complete Registration',
                'event_time' => now()->timestamp,
                'action_source' => 'website',
                'user_data' => [
                    'client_ip_address' => $request->ip(),
                    'client_user_agent' => $request->userAgent(),
                ],
            ]],
            'access_token' => $accessToken,
        ];

        $response = Http::post("https://graph.facebook.com/v17.0/{$pixelId}/events", $data);

        \Log::info('Meta Pixel response', ['response' => $response->json()]);

        return response()->json($response->json());
    }

    public function welcomeCategory($category_name)
    {
        $categories = Category::select('id', 'category_name')
            ->orderBy('id')
            ->get();
        
        $projects = Project::select('id', 'title', 'author', 'publish_time', 'sub_title', 'project_image', 'sub_title', 'category_name')
            ->where('category_name', $category_name)
            ->where('status', 'active')
            ->orderBy('publish_time', 'desc')
            ->paginate(5)
            ->through(function ($project) {
                $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title_short = Str::words($project->title, 10, '');
                $project->slug = Str::slug($project->title_short);
                $project->sub_title_short = Str::words($project->sub_title, 10, '');
                $project->sub_slug = Str::slug($project->sub_title_short);
                return $project;
            });

        return view('welcome.category', compact('category_name', 'categories', 'projects'));
    }

    public function welcomeDescription($slug)
    {
        $categories = Category::select('id', 'category_name')
            ->orderBy('id')
            ->get();

        $project = Project::get()->first(function ($proj) use ($slug) {
            return \Illuminate\Support\Str::slug(\Illuminate\Support\Str::words($proj->title, 10)) === $slug;
        });

        if (!$project) {
            abort(404);
        }

        $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
        $project->title = $project->title; // keep full title here
        $project->sub_title = $project->sub_title;
        $project->author = $project->author ?? 'Unknown';

        $id = $project->id;

        $relatedProjects = Project::where('category_id', $project->category_id)
        ->where('id', '!=', $project->id)
        ->where('status', 'active')
        ->inRandomOrder()
        ->limit(5)
        ->get()
        ->map(function ($proj) {
            $proj->publish_time = \Carbon\Carbon::parse($proj->publish_time)->format('Y-m-d');
            return $proj;
        });

        return view('welcome.description', [
            'project' => $project,
            'categories' => $categories,
            'id' => $id,
            'relatedProjects' => $relatedProjects,
        ]);
    }

    public function welcomeAboutUs()
    {
        $categories = Category::select('id', 'category_name')
            ->orderBy('id')
            ->get();

        $randomProjects = Project::inRandomOrder()
            ->where('status', 'active')
            ->limit(10)
            ->get()
            ->map(function ($project) {
                $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
                $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
                return $project;
            });

        return view('welcome.aboutus', compact('categories', 'randomProjects'));
    }

    public function welcomeContactUs()
    {
        $categories = Category::select('id', 'category_name')
            ->orderBy('id')
            ->get();

        return view('welcome.contactus', compact('categories'));
    }

    // public function welcomeTerm()
    // {
    //     $categories = Category::select('id', 'category_name')
    //         ->orderBy('id')
    //         ->get();

    //     $randomProjects = Project::inRandomOrder()
    //         ->where('status', 'active')
    //         ->limit(5)
    //         ->get()
    //         ->map(function ($project) {
    //             $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
    //             $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
    //             $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
    //             return $project;
    //         });

    //     return view('welcome.term', compact('categories', 'randomProjects'));
    // }

    // public function welcomePrivacy()
    // {
    //     $categories = Category::select('id', 'category_name')
    //         ->orderBy('id')
    //         ->get();

    //     $randomProjects = Project::inRandomOrder()
    //         ->where('status', 'active')
    //         ->limit(5)
    //         ->get()
    //         ->map(function ($project) {
    //             $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
    //             $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
    //             $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
    //             return $project;
    //         });

    //     return view('welcome.privacy', compact('categories', 'randomProjects'));
    // }
}