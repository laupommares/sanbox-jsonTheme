<?php

namespace App\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class ThemeComposer
{
    public function compose(View $view)
    {
        $json = File::get(resource_path('json/theme.json'));
        $theme = json_decode($json, true);
        
        $view->with('theme', $theme);
    }
}