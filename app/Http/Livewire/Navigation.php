<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Section;

class Navigation extends Component
{
    public function render()
    {
        $sections = Section::all();
        return view('livewire.navigation', compact('sections'));
    }
}
