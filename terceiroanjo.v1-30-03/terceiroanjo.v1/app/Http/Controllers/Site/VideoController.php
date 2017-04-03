<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Palestrante;
use App\Categoria;
use App\Subcategoria;


class VideoController extends Controller
{
    public function videos_all()
    {
        $categorias = Categoria::orderBy('nome')->get();
        $palestrantes = Palestrante::orderBy('nome')->get();
        $subcategorias = Subcategoria::orderBy('nome')->get();
       	$videos = Video::orderBy('id', 'DESC')->paginate(8);
        return view('site.videos_all', compact('videos', 'palestrantes', 'categorias', 'subcategorias'));
    }

    public function video($id)
    {
    	$categorias = Categoria::orderBy('nome')->get();
        $palestrantes = Palestrante::orderBy('nome')->get();
        $subcategorias = Subcategoria::orderBy('nome')->get();

        //$videos = $palestrante->pales()->orderBy('id')->get();
        $videos = Video::find($id);
        return view('site.video', compact('videos', 'palestrantes', 'categorias', 'subcategorias'));
    }
}
