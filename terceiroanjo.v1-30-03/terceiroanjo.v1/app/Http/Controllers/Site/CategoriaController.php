<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Subcategoria;
use App\Palestrante;
use App\Video;


class CategoriaController extends Controller
{
    public function categorias_all()
    {
        $categorias = Categoria::orderBy('nome')->paginate(12);
        $palestrantes = Palestrante::orderBy('nome')->get();
        return view('site.categorias_all', compact('categorias', 'palestrantes'));
    } 

    public function categoria($id)
    {
    	$categorias = Categoria::orderBy('nome')->get();
        $palestrantes = Palestrante::orderBy('nome')->get();

        $cats = Categoria::find($id);
        $videos = $cats->video()->orderBy('id')->paginate(12);
        $subcategorias = $cats->subcategoria()->orderBy('id')->get();
        //$videosi = $subcategorias->video()->orderBy('id')->paginate(12);
        
        return view('site.categoria', compact('cats', 'categorias', 'palestrantes', 'videos', 'subcategorias'));
    }

    /*public function busca($id)
    {
        $busca = $request->all();

        $paginacao = false;
        $tipos = Tipo::orderBy('titulo')->get();
        $cidades = Cidade::orderBy('nome')->get();

        if($busca['status'] == 'todos'){
            $testeStatus = [
                ['status','<>',null]
            ];
        }else{
            $testeStatus = [
                ['status','=',$busca['status']]
            ];
        }

        return view('site.categoria.busca',compact('busca','imoveis','paginacao','tipos','cidades'));
    }*/
}
