<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'))->render();
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        /* return $request->file('file'); */
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'file' => 'image',
        ]);

        $service = Service::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('services', $request->file('file'));

            $service->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.services.edit', $service)->with('info', 'Servicio creado con éxito');
    }

    public function show(Service $service)
    {
        //
    }


    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }


    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'file' => 'image',
        ]);

        $service->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('services', $request->file('file'));

            if ($service->image) {
                Storage::delete($service->image->url);

                $service->image->update([
                    'url' => $url
                ]);
            }else{
                $service->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.services.edit', $service)->with('info', 'Servicio actualizado con éxito');
    }

    public function destroy(Service $service)
    {
        Storage::delete($service->image->url);
        
        $service->image->delete();

        $service->delete();
        
        return redirect()->route('admin.services.index')->with('info', 'El servicio se eliminó con éxito');
    }
}
