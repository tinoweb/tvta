<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Palestrante;

class DoacaoController extends Controller
{
    public function doar()
    {
		$categorias = Categoria::all();
        $palestrantes = Palestrante::all();
        return view('site.quero_doar',compact('categorias', 'palestrantes'));
    }

    public function participar()
    {
		$categorias = Categoria::all();
        $palestrantes = Palestrante::all();
        return view('site.quero_participar',compact('categorias', 'palestrantes'));
    }

    public function divulgar()
    {
		$categorias = Categoria::all();
        $palestrantes = Palestrante::all();
        return view('site.quero_divulgar',compact('categorias', 'palestrantes'));
    }
}
