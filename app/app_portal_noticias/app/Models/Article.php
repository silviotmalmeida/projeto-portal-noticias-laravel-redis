<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // definindo o nome da tabela no BD
    protected $table = 'articles';

    // definindo os atributos a serem informados na criação
    // e pesquisáveis pelos clientes
    protected $fillable = [
        'id',
        'title',
        'article',
        'created_at',
        'updated_at'
    ];
}
