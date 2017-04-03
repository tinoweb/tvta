<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $fillable = [
		'nome',
		'descricao',
		'conteudo',
		'data',
		'imagem',
		'arquivo'
	];
}
