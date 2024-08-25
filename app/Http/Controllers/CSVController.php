<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisito; // Use o seu modelo correspondente
use Maatwebsite\Excel\Facades\Excel; // Caso esteja utilizando Laravel Excel
use Illuminate\Support\Facades\Validator;

class CSVController extends Controller
{
    public function importCSV(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'csvFile' => 'required|mimes:csv,txt',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $file = $request->file('csvFile');
        $filePath = $file->getRealPath();

        // Abrir e ler o arquivo CSV
        $file = fopen($filePath, 'r');
        $header = fgetcsv($file);

        while ($columns = fgetcsv($file)) {
            $data = array_combine($header, $columns);

            // Inserir os dados no banco de dados
            Requisito::create([
                'nome' => $data['nome'],
                'descricao' => $data['descricao'],
                'outro_campo' => $data['outro_campo'], // Adapte conforme necessário
            ]);
        }

        fclose($file);

        return back()->with('success', 'CSV importado com sucesso.');
    }
}
