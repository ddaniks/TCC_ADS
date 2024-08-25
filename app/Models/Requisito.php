<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    use HasFactory;

    // Defina a tabela associada, se não for o padrão
    protected $table = 'requisitos';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'cnpj',
        'telefone'
        // adicione outros campos conforme necessário
    ];
}
