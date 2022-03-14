<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        
            $contact = Contact::all();
    
            return view('contact')
                    ->with('title', 'Contact')
                    ->with('contact', $contact);
        }
}
