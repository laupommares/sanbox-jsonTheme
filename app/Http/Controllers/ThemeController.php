<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ThemeController extends Controller
{
    public function welcome()
    {
        $json = File::get(resource_path('json/theme.json'));
        $theme = json_decode($json, true);

        return view('welcome', compact('theme'));
    }
}