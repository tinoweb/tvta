<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artigo;
use App\Categoria;
use App\Palestrante;

class ArtigoController extends Controller
{
    public function artigos()
    {
    	$categorias = Categoria::orderBy('nome')->get();
        $palestrantes = Palestrante::orderBy('nome')->get();

        $artigos = Artigo::orderBy('id', 'DESC')->paginate(10);
        return view('site.artigos', compact('artigos', 'categorias', 'palestrantes'));
    }

    public function artigo($id)
    {
    	$categorias = Categoria::orderBy('nome')->get();
        $palestrantes = Palestrante::orderBy('nome')->get();

        $artigos = Artigo::find($id);
        return view('site.artigo', compact('artigos', 'categorias', 'palestrantes'));
    }
}
