<?php

namespace App\Http\Controllers;

use App\Mail\ContactAdminMail;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index(){
        $teams = Team::pluck('name', 'id');
        $services = Service::pluck('title', 'id');

        return view('inicio', compact('teams', 'services'));
    }

    public function submit(Request $request){
        /* return $request->all(); */

        $request->validate([
            'name' => 'required',
            'mail' => 'required|email'
        ]);

        $contact = Contact::create($request->all());

        Mail::to($request->mail)->send(new ContactMail($request));
        Mail::to($request->mail)->send(new ContactAdminMail($request));
        

        return redirect()->route('home.index');
    }
}
