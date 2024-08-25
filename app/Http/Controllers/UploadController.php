<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        // Supondo que 'requisitos' seja um array de checkbox marcados
        $requisitos = $request->input('requisitos', []);  // Pega o valor do checklist, default para array vazio se não existir

        // Pega os arquivos enviados
        $arquivos = $request->file('arquivos');

        // Verifica se existem arquivos e se o checklist foi marcado
        if ($arquivos && !empty($requisitos)) {
            foreach ($arquivos as $index => $arquivo) {
                if ($arquivo && $arquivo->isValid()) {
                    // Salva o arquivo com um nome único
                    $arquivo->storeAs('uploads', $arquivo->getClientOriginalName(), 'public');
                }
            }
        }

        return redirect()->back()->with('success', 'Arquivos enviados com sucesso!');
    }
}
