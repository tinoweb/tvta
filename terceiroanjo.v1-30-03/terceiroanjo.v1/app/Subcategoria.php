<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $fillable = [
		'id_categoria',
		'nome'
	];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria','id_categoria');
    }

    public function video()
    {
        return $this->belongsToMany(Video::class);
    }
}
