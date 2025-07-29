<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class WeatherController extends Controller
{
    public function index()
    {
        $weatherFile = storage_path('app/weather.json');

        if (!file_exists($weatherFile)) {
            return view('weather.index', ['weather' => []]);
        }

        $contents = file_get_contents($weatherFile);
        $weather = json_decode($contents, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return view('weather.index', ['weather' => []]);
        }

        return view('weather.index', compact('weather'));
    }
}
