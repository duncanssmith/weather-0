<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rule;
use App\Models\User;

class WeatherController extends Controller
{
    const UNITS = 'metric'; // metric | standard | imperial
    const MODE = 'json'; // xml | json | default (json)

    /**
     * @return Factory|View
     */
    public function index()
    {
        $apiKey = env('WEATHER_API_KEY');

        $user = auth()->user();

        $urlForecast = $this->getForecastWeatherData($user->location, self::MODE, self::UNITS, $apiKey);
        $urlCurrent = $this->getCurrentWeatherData($user->location, self::MODE, self::UNITS, $apiKey);

        session()->flash('success', 'Registered users can visit this page');

        return view('index', [
            'user' => $user,
            'title' => 'Weather',
            'urlForecast' => $urlForecast,
            'urlCurrent' => $urlCurrent,
        ]);
    }

    /**
     * @return Factory|View
     */
    public function list_users()
    {
        $user = auth()->user();

        // dd($user);

        if ($user->is_admin) {
            $users = User::all();
        } else {
            $users = null;
        }

        // dd($user);

        session()->flash('success', 'Only Admins can visit this page');

        return view('users', [
            'users' => $users,
            'title' => 'Registered users',
        ]);
    }

    public function weather()
    {
        $apiKey = env('WEATHER_API_KEY');

        $user = auth()->user();

        $urlForecast = $this->getForecastWeatherData($user->location, self::MODE, self::UNITS, $apiKey);
        $urlCurrent = $this->getCurrentWeatherData($user->location, self::MODE, self::UNITS, $apiKey);

        return view('weather', [
            'title' => 'Weather',
            'urlForecast' => $urlForecast,
            'urlCurrent' => $urlCurrent
        ]);
    }

    public function getForecastWeatherData($location, $mode, $units, $apiKey)
    {
        $apiUrl = "https://api.openweathermap.org/data/2.5/forecast?q=" . $location . "&mode=" . $mode . "&units=" . $units . "&appid=" . $apiKey;

        return $apiUrl;
    }

    public function getCurrentWeatherData($location, $mode, $units, $apiKey)
    {
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" . $location . "&mode=" . $mode . "&units=" . $units . "&appid=" . $apiKey;

        return $apiUrl;
    }
}