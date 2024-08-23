<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licitation extends Model
{
    // Defina a tabela associada se não seguir o padrão
    protected $table = 'licitations'; // Ajuste o nome da tabela conforme necessário

    // Defina os atributos que podem ser preenchidos em massa
    protected $fillable = ['title', 'summary']; // Adicione outros campos conforme necessário
}
