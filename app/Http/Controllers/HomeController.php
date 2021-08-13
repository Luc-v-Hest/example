<?php

namespace App\Http\Controllers;

use GNAHotelSolutions\Weather\Weather;

class HomeController extends Controller
{
    public function index()
    {
        $example = 'test';

        return view(
            'welcome',
            ["weather" => $example]
        );
    }
}
