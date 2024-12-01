<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getWeather(Request $request)
    {

        $request->validate([
            'city' => 'required|string|max:100',
        ]);

        $city = $request->input('city');
        $apiKey = env('WEATHER_API_KEY');
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}";


        $response = Http::get($url);


        if ($response->successful()) {
            $weather = $response->json();
            return view('index', compact('weather', 'city'));
        } else {

            return redirect()->back()->withErrors(['message' => 'Город не найден, попробуйте ввести другой.']);
        }
    }
}
