<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function paparBorang() {
        return '
        <form method="POST" action="/register-data">
        '.csrf_field().'
        <input type="text" name="email" placeholder="Isikan email">
        <button type="submit">Daftar Sekarang</button>
        </form>';
    }

    public function terimaData() {
        // check maklumat pendaftaran
        // hantar emel
        // redirect
        return 'Borang berjaya dihantar';
    }
}
