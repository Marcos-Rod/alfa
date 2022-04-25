<?php

namespace App\View\Components;

use App\Models\Configuration;
use App\Models\Gallery;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $configuracion = Configuration::first();

        return view('layouts.app', compact('configuracion'));
    }
}
