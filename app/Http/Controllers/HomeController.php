<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licitation; // Importar o modelo Licitation

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Obtenha as licitações do banco de dados
        $licitations = Licitation::all(); // Ou ajuste a consulta conforme necessário

        return view('home', compact('licitations'));
    }
}
