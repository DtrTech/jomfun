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
        // Fetch projects from database, ordered by latest publish_time
        $projects = Project::select('id', 'title', 'author', 'publish_time')
            ->orderBy('publish_time', 'desc')
            ->limit(10)
            ->get()
            ->map(function ($project) {
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
        
        $projects = Project::select('id', 'title', 'author', 'publish_time', 'sub_title')
            ->where('category_name', $category_name)
            ->orderBy('publish_time', 'desc')
            ->limit(10)
            ->get()
            ->map(function ($project) {
                $project->publish_time = Carbon::parse($project->publish_time)->format('Y-m-d');
                $project->title = Str::words($project->title, 20, '...');
                $project->sub_title = Str::words($project->sub_title, 50, '...');
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
        
        return view('welcome.category', compact('category_name', 'categories', 'projects' ,'randomProjects'));
    }

    public function welcomeDescription($id)
    {
        $categories = Category::select('id', 'category_name')
            ->orderBy('id')
            ->get();

        $project = Project::select('id', 'title', 'author', 'publish_time', 'sub_title', 'category_name', 'description')
            ->where('id', $id)
            ->first();

        $randomProjects = Project::inRandomOrder()
            ->limit(5)
            ->get()
            ->map(function ($p) {
                $p->publish_time = \Carbon\Carbon::parse($p->publish_time)->format('Y-m-d');
                $p->title = \Illuminate\Support\Str::words($p->title, 20, '...');
                $p->sub_title = \Illuminate\Support\Str::words($p->sub_title, 50, '...');
                return $p;
            });

        return view('welcome.description', compact('project', 'randomProjects', 'categories', 'id'));
    }
}