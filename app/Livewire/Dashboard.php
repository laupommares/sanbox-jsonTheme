<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $theme;

    public function render()
    {
        return view('livewire.dashboard')->layout('components.layouts.app');
    }
}
