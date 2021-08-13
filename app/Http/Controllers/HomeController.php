<?php

namespace App\Http\Controllers;

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
