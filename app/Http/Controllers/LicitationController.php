<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Para fazer requisições HTTP
use Illuminate\Support\Facades\DB; // Import do DB Facade

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


    public function importCSV(Request $request)
    {
        $file = $request->file('csv_file');

        if ($file->isValid()) {
            $data = array_map('str_getcsv', file($file->getRealPath()));

            // Remove the header
            array_shift($data);

            foreach ($data as $row) {
                DB::table('licitations')->insert([
                    'data_resultado_compra' => $row[0],
                    'data_abertura' => $row[1],
                    'orgao_superior_licitante' => $row[2],
                    'orgao_vinculada_licitante' => $row[3],
                    'unidade_gestora' => $row[4],
                    'situacao' => $row[5],
                    'modalidade_licitacao' => $row[6],
                    'instrumento_legal_contratacao' => $row[7],
                    'numero_licitacao' => $row[8],
                    'objeto_licitacao' => $row[9],
                ]);
            }
        }

        return redirect()->back()->with('success', 'Arquivo CSV importado com sucesso!');
    }


}

