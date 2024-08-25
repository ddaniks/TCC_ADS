<?php

namespace App\Http\Controllers;

use App\Models\Licitacao;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    
    public function import(Request $request)
    {
        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');
            $filePath = $file->store('uploads/csv'); // Armazena o arquivo temporariamente

            // Lógica para ler o CSV e inserir os dados no banco

            $csvFile = $file; // Substitua pelo caminho correto

            if (($handle = fopen($csvFile, "r")) !== false) {
                while (($data = fgetcsv($handle)) !== false) {
                    $licitacao = new Licitacao;
                    $licitacao->data_resultado = $data[0];
                    $licitacao->data_abertura = $data[1];
                    $licitacao->orgao_superior = $data[2];
                    $licitacao->orgao_vinculado = $data[3];
                    $licitacao->unidade_gestora = $data[4];
                    $licitacao->situacao = $data[5];
                    $licitacao->modalidade = $data[6];
                    $licitacao->instrumento_legal = $data[7];
                    $licitacao->numero_licitacao = $data[8];
                    $licitacao->objeto = $data[9];
                    // ... e assim por diante para os demais atributos
    
                    $licitacao->save();
                }
                fclose($handle);
    
                
                return redirect()->back()->with('success', 'Dados importados com sucesso!');
            } else {
                return redirect()->back()->with('error', 'Erro ao abrir o arquivo CSV.');
            }

            return redirect()->back()->with('success', 'Arquivo importado com sucesso!');
        }

        return view('import'); // View para o formulário
    }
}
