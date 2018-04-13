<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function formulaire()
    {
        return view('contact');
    }

    public function traitement()
    {   
        $resultat = request()->validate([
            'email'   => ['required', 'email'],
            'message' => ['required','min:5','max:50'],
        ]);

        if($resultat)
            {
                return view('confirmation');
            }
        else
            {
                return back()->withErrors('email');
            }
    }
}
