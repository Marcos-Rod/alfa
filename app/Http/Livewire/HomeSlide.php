<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use App\Models\Image;
use Livewire\Component;

class HomeSlide extends Component
{
    public function render()
    {
        $gallery = Gallery::where('slug', 'slide-principal')->with(['image' => function($query){
            $query->orderBy('position');
        }])->get();
        
        return view('livewire.home-slide', compact('gallery'));
    }
}
