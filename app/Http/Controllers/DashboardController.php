<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Respon memanggil template daripada folder resources/views/dashboard.php

        $senaraiPost = [
            ['id' => 1, 'username' => 'ali', 'content' => 'Ini adalah contoh post 1'],
            ['id' => 2, 'username' => 'ahmad', 'content' => 'Ini adalah contoh post 2'],
            ['id' => 3, 'username' => 'muthu', 'content' => 'Ini adalah contoh post 3'],
        ];

        // Cara 1 membekalkan (attach/passing) data ke template
        // return view('dashboard')->with('senaraiPost', $senaraiPost);
        // Cara 2 membekalkan (attach/passing) data ke template
        // return view('dashboard', ['senaraiPost' => $senaraiPost]);
        // Cara 3
        return view('dashboard', compact('senaraiPost'));
    }
}
