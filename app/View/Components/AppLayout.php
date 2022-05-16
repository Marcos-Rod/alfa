<?php

namespace App\View\Components;

use App\Models\Configuration;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Team;
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
        $teams = Team::pluck('name', 'id');
        $services = Service::pluck('title', 'id');
        $configuracion = Configuration::first();

        return view('layouts.app', compact('configuracion', 'teams', 'services'));
    }
}
