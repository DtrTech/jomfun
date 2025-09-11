<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Banner;
use App\Models\PageView;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
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
}
