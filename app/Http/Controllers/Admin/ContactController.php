<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function edit(Contact $contact){
        return view('admin.contacts.response', compact('contact'));
    }
}