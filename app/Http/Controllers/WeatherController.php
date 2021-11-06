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
    const API_KEY = "786986c790691a6fe26c60fcd9fae106";
    const UNITS = 'metric'; // metric | standard | imperial
    const MODE = 'json'; // xml | json | default (json)

    /**
     * @return Factory|View
     */
    public function index()
    {
        $user = auth()->user();

        $url = $this->getWeatherData($user->location, self::MODE, self::UNITS, self::API_KEY);

        return view('index', [
            'user' => $user,
            'title' => 'Weather',
            'url' => $url,
        ]);
    }

    /**
     * @return Factory|View
     */
    public function insight()
    {
        $user = auth()->user();

        // dd($user);

        if ($user->is_admin) {
            $users = User::all();
        } else {
            $users = null;
        }

        // dd($user);

        return view('users', [
            'users' => $users,
            'title' => 'Registered users',
        ]);
    }

    public function getWeatherData($location, $mode, $units, $apiKey)
    {
        $apiUrl = "https://api.openweathermap.org/data/2.5/forecast?q=" . $location . "&mode=" . $mode . "&units=" . $units . "&appid=" . $apiKey;

        return $apiUrl;
    }
}