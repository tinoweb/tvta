<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Palestrante;
use App\Categoria;
use App\Subcategoria;
use App\Video;

class PalestranteController extends Controller
{
    public function palestrantes_all()
    {
        $categorias = Categoria::orderBy('nome')->get();
        $palestrantes = Palestrante::orderBy('nome')->paginate(12);
        return view('site.palestrantes_all', compact('palestrantes', 'categorias'));
    }

    public function palestrante($id)
    {
        $categorias = Categoria::orderBy('nome')->get();
        $palestrantes = Palestrante::orderBy('nome')->get();

        $palestrante = Palestrante::find($id);
        $videos = $palestrante->video()->orderBy('id')->paginate(12);
		//$videos = Video::where('id_palestrante','=', $id)->orderBy('id')->paginate(1);

    	return view('site.palestrante', compact('palestrante', 'videos', 'categorias', 'palestrantes'));
    }

}		
