<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $team = Team::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('team', $request->file('file'));

            $team->image()->create([
                'url' => $url
            ]);
        }
        return redirect()->route('admin.teams.edit', $team)->with('info', 'Regristro creado exitosamente');
    }

    public function show(Team $team)
    {
        //
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
       $request->validate([
           'name' => 'required'
       ]);

       $team->update($request->all());

       if ($request->file('file')) {

            $url = Storage::put('team', $request->file('file'));

            if ($team->image) {
                Storage::delete($team->image->url);

                $team->image->update([
                    'url' => $url
                ]);
            }else{
                $team->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.teams.edit', $team)->with('info', 'El registro se actualizó con éxito');
    }


    public function destroy(Team $team)
    {
        Storage::delete($team->image->url);
        
        $team->image->delete();

        $team->delete();
        
        return redirect()->route('admin.teams.index')->with('info', 'El registro se eliminó con éxito');
    }
}
