<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function paparBorang()
    {
        return view('register');
    }

    public function terimaData()
    {
        // check maklumat pendaftaran
        // hantar emel
        // redirect
        return 'Borang berjaya dihantar';
    }
}
