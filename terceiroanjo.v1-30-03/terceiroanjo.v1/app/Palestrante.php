<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palestrante extends Model
{
	protected $fillable = [
		'nome',
		'profissao',
		'descricao',
		'imagem'
	];

    public function video()
    {
        return $this->hasMany('App\Video','id_palestrante');
    }

    public function index()
    {
    	$palestrante = Palestrante::all(); //Lista Todas os palestrantes do banco
    }
}
