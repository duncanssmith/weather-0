<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rule;

class WeatherController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $user = auth()->user();

        return view('index', [
            'user' => $user,
            'title' => 'Weather',
        ]);
    }
}
