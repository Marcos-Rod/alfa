<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request->all(); */
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:galleries'
        ]);

        $gallery = Gallery::create($request->all());

        return redirect()->route('admin.galleries.edit', compact('gallery'))->with('info', 'La galería se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function storeImage(Request $request, Gallery $gallery)
    {
        return $gallery->all();
        $request->validate([
            'image' => 'required'
        ]);

        $url = Storage::put('galleries', $request->file('image'));

        $gallery->image()->create();
        $image = Image::create($request->all());
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        /* return $gallery->all(); */
        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        if ($request->file('image')) {
            $url = Storage::put('galleries', $request->file('image'));

            /* if ($gallery->image) {
                Storage::delete($gallery->image->url);

                $gallery->image->update([
                    'url' => $url
                ]);
            }else{ */
                $gallery->image()->create([
                    'url' => $url,
                    'title' => $request->title,
                    'description' => $request->description,
                    'link' => $request->link,
                    'position' => $request->position
                ]);
            /* } */
        }
        return redirect()->route('admin.galleries.edit', compact('gallery'))->with('info', 'Imagen guardada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
