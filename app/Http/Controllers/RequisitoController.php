<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RequisitosImport;

class RequisitoController extends Controller
{
    public function importarCSV(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:2048',
        ]);

        $file = $request->file('csv_file');

        

        return redirect()->back()->with('success', 'Dados importados com sucesso!');
    }
}
