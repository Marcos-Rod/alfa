<?php

namespace App\Http\Controllers;

use App\Mail\ContactAdminMail;
use App\Mail\ContactMail;
use App\Models\Configuration;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Section;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index(){
        $sections = Section::all();
        $team = Team::all();
        $servicios = Service::all();
        $gallery = Gallery::where('slug', 'galeria')->with(['image' => function($query){
            $query->orderBy('position');
        }])->get();
        
        return view('inicio', compact('sections', 'team', 'servicios', 'gallery'));
    }

    public function submit(Request $request){
        /* return $request->all(); */
        $config_admin = Configuration::all();
        $mail_admin = $config_admin[0]->mail;
        $request->validate([
            'name' => 'required',
            'mail' => 'required|email',
            'team_id' => 'required',
            'service_id' => 'required',
            'date' => 'required'
        ]);
        
        try {
    
            /* $contact = Contact::create($request->all()); */
    
            Mail::to($request->mail)
                ->send(new ContactMail($request));
                
            Mail::to($mail_admin)
                ->cc('admin@correo.com')
                ->send(new ContactAdminMail($request));

            $result = ['status' => 'succes', 'type' => 'success', 'info' => $request['name'] . ' gracias por agendar su cita. Enbreve nos pondremos en contacto con usted'];
        } catch (\Exception $e) {
            $result = ['status' => 'succes', 'type' => 'danger', 'info' => 'Hubo un error al enviar el correo. Por favor intente nuevamente llenando todos los campos'];
        }

        return redirect()->route('home.index', '#contacto')->with($result);
    }
}
