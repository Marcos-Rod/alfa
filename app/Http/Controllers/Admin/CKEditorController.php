<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CKEditorController extends Controller
{
    public function upload(Request $request){
        if($request->hasFile('upload')){
            //obtener nombre del archivo con extensión
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //Obtener extensión del archivo
            $extension = $request->file('upload')->getClientOriginalExtension();

            //Nombre del archivo para almacenar
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //subir Archivo

            $request->file('upload')->storeAs('images', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('storage/images/'.$filenametostore);

            $msg = 'Imagen cargada satisfactoriamente!';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
