<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Respon memanggil template daripada folder resources/views/dashboard.php

        $senaraiPost = [
            ['id' => 1, 'username' => 'ali', 'content' => 'Ini tweet 1'],
            ['id' => 2, 'username' => 'ahmad', 'content' => 'Ini tweet 2'],
            ['id' => 3, 'username' => 'muthu', 'content' => 'Ini tweet 3'],
            ['id' => 4, 'username' => 'siti', 'content' => 'Ini tweet 4'],
            ['id' => 5, 'username' => 'john', 'content' => 'Ini tweet 5'],
        ];

        // Cara 1 membekalkan (attach/passing) data ke template
        // return view('dashboard')->with('senaraiPost', $senaraiPost);
        // Cara 2 membekalkan (attach/passing) data ke template
        // return view('dashboard', ['senaraiPost' => $senaraiPost]);
        // Cara 3
        return view('dashboard', compact('senaraiPost'));
    }
}
