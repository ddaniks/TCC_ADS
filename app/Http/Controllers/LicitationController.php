<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Para fazer requisições HTTP

class LicitationController extends Controller
{
    public function index()
    {
        // Fazer a requisição para a API com cabeçalhos
    $response = Http::withHeaders([
        'chave-api-dados' => '2ae025c7955160ccc44ad36f05515f83'
    ])->get('https://api.portaldatransparencia.gov.br/api-de-dados/licitações');

    // Verificar se a requisição foi bem-sucedida
    if ($response->successful()) {
        // Decodificar a resposta JSON
        $licitations = $response->json();
    } else {
        // Em caso de erro, definir $licitations como um array vazio
        $licitations = [];
    }

    // Retornar a view com os dados
    return view('licitations.index', compact('licitations'));
    }
}

