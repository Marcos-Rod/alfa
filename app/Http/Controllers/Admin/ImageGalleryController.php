<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        /* return $image; */
        return view('admin.galleries.edit-image', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
       /*  return $image; */

        $image->update($request->all());
        if ($request->file('image')) {
            $url = Storage::put('galleries', $request->file('image'));

            Storage::delete($image->url);

            $image->update([
                'url' => $url
            ]);
        }
        return redirect()->route('admin.galleries.edit', $image->imageable_id)->with('info', 'Imagen actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image, Request $request)
    {

        Storage::delete($image->url);
        $image->delete();
        return redirect()->route('admin.galleries.edit', $request->galleryId)->with('info', 'Imagen eliminada con éxito');
    }
}
