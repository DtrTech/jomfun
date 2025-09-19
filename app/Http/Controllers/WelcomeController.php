<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Banner;
use App\Models\PageView;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{
    public function welcome()
{
    // Paginate instead of limit
    $projects = Project::select('id', 'title', 'author', 'publish_time', 'project_image', 'author_image', 'category_name')
        ->orderBy('publish_time', 'desc')
        ->paginate(10)
        ->through(function ($project) {
            $project->publish_time = Carbon::parse($project->publish_time)->format('Y-m-d');
            $project->title = Str::words($project->title, 20, '...');
            return $project;
        });

    $categories = Category::select('id', 'category_name')
        ->orderBy('id')
        ->get();

    $randomProjects = Project::inRandomOrder()
        ->limit(5)
        ->get()
        ->map(function ($project) {
            $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
            $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
            $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
            return $project;
        });
    
    return view('welcome.welcome', compact('projects', 'categories', 'randomProjects'));
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
        
        $projects = Project::select('id', 'title', 'author', 'publish_time', 'sub_title', 'project_image')
            ->where('category_name', $category_name)
            ->orderBy('publish_time', 'desc')
            ->paginate(5) // use pagination instead of limit
            ->through(function ($project) {
                $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
                $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
                return $project;
            });

        $randomProjects = Project::inRandomOrder()
            ->limit(5)
            ->get()
            ->map(function ($project) {
                $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
                $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
                return $project;
            });
        
        return view('welcome.category', compact('category_name', 'categories', 'projects', 'randomProjects'));
    }

    public function welcomeDescription($title)
    {
        $categories = Category::select('id', 'category_name')
            ->orderBy('id')
            ->get();

        $project = Project::get()->first(function ($proj) use ($title) {
            return Str::slug(Str::words($proj->title, 10)) === $title;
        });

        if (!$project) {
            abort(404);
        }

        $id = $project->id;

        $randomProjects = Project::inRandomOrder()
            ->limit(5)
            ->get()
            ->map(function ($project) {
                $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
                $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
                return $project;
            });

        return view('welcome.description', compact('project', 'randomProjects', 'categories', 'id'));
    }

    public function welcomeAboutUs()
    {
        $categories = Category::select('id', 'category_name')
            ->orderBy('id')
            ->get();

        $randomProjects = Project::inRandomOrder()
            ->limit(5)
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

        $randomProjects = Project::inRandomOrder()
            ->limit(5)
            ->get()
            ->map(function ($project) {
                $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
                $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
                return $project;
            });

        return view('welcome.contactus', compact('categories', 'randomProjects'));
    }

    public function welcomeTerm()
    {
        $categories = Category::select('id', 'category_name')
            ->orderBy('id')
            ->get();

        $randomProjects = Project::inRandomOrder()
            ->limit(5)
            ->get()
            ->map(function ($project) {
                $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
                $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
                return $project;
            });

        return view('welcome.term', compact('categories', 'randomProjects'));
    }

    public function welcomePrivacy()
    {
        $categories = Category::select('id', 'category_name')
            ->orderBy('id')
            ->get();

        $randomProjects = Project::inRandomOrder()
            ->limit(5)
            ->get()
            ->map(function ($project) {
                $project->publish_time = \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title = \Illuminate\Support\Str::words($project->title, 20, '...');
                $project->sub_title = \Illuminate\Support\Str::words($project->sub_title, 50, '...');
                return $project;
            });

        return view('welcome.privacy', compact('categories', 'randomProjects'));
    }
}