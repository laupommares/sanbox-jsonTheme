<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Livewire\Dashboard;

Route::get('/', [ThemeController::class, 'app']);
Route::get('/dashboard', Dashboard::class);
