<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Categoria;
use App\Subcategoria;
use App\Palestrante;
use App\Artigo;
use App\Serie;

class HomeController extends Controller
{
    public function home()
    {	        
        $videos = Video::orderBy('id', 'DESC')->take(12)->get();
        $categorias = Categoria::orderBy('nome')->get();

        $palestrantes = Palestrante::orderBy('nome')->get();
        $artigos = Artigo::orderBy('id', 'DESC')->take(3)->get();

        return view('site.home', compact('videos', 'categorias', 'palestrantes', 'artigos'));
    }

    public function getDownload()
	{
	    $file= public_path()."/file/info.pdf";

	    $headers = array(
	      	'Content-Type: application/pdf',
	    );

	    return response()->download($file, 'filename.pdf', $headers);
	}

}
