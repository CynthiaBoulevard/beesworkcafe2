<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public function create()
    {
        //

        return view('contact');
    }
        public function store(Request $request)
    {
            $this->validate($request, [
                'entreprise' => 'bail|required|max:100',
                'nom' => 'bail|required|max:100',
                'prenom' => 'bail|required|max:100',
                'adresse' => 'bail|required|max:200',
                'code_postal' => 'bail|required|max:5',
                'ville' => 'bail|required|max:100',
                'telephone' => 'bail|required|max:100',
                'email' => 'bail|required|email',
                'message' => 'bail|required|max:500'
            ]);
            $contact = new \App\Contact;
            $contact->entreprise = $request->entreprise;
            $contact->nom = $request->nom;
            $contact->prenom = $request->prenom;
            $contact->adresse = $request->adresse;
            $contact->code_postal = $request->code_postal;
            $contact->ville = $request->ville;
            $contact->telephone = $request->telephone;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->save();
            return view('confirm');
        }
    }

