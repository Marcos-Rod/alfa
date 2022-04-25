<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Admin\ResponseMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function edit(Contact $contact){
        return view('admin.contacts.response', compact('contact'));
    }

    public function submit(Request $request){
        /* return $request->all(); */

        $request->validate([
            'asunto' => 'required',
            'mail' => 'required|email',
            'response' => 'required'
        ]);


        Mail::to($request->mail)->send(new ResponseMail($request->asunto));
        

        return redirect()->route('admin.contacts.index')->with('info', 'Su respuesta fue enviada con éxito');
    }
}
