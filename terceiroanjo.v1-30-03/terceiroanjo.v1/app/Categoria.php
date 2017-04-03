<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categoria extends Model
{

	protected $fillable = [
		'nome'
	];
    
    public function video()
    {
        return $this->belongsToMany(Video::class);
    }

    public function subcategoria()
    {
        return $this->hasMany('App\Subcategoria','id_categoria');
    }


    /*public function index()
    {
    	$categorias = Categoria::all(); //Lista Todas as Categorias do banco
    }*/
}
