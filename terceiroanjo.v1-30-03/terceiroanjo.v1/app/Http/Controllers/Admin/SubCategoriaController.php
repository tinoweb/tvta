<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subcategoria;
use App\Categoria;

class SubCategoriaController extends Controller
{
    public function index()
    {
        //$subcategorias = SubCategoria::all();
        $subcategorias = Subcategoria::orderBy('id', 'DESC')->paginate(10);//aki define a qtd de cliente por pagina
    	return view('admin.subcategorias.index', compact('subcategorias'));
    }

    public function adicionar()
    {
        $categorias = Categoria::all();
        return view('admin.subcategorias.adicionar', compact('categorias','subcategorias'));
    } 

    public function salvar(Request $request)
    {
        Subcategoria::create($request->all()); // pegar os dados do formulario e salva no banco
        return redirect()->route('admin.subcategorias.adicionar')->with('success','Sub-Categoria Adicionado com Sucesso!!');
    }


    public function editar($id)
    {
        $categorias = Categoria::all();

        $subcategorias = Subcategoria::find($id);
        if(!$categorias){
            return redirect()->route('admin.subcategorias.adicionar')->with('success','Não existe essa Sub-Categoria cadastrado!! Deseja Cadastrar uma nova Categoria');
        }

        return view('admin.subcategorias.editar', compact('subcategorias', 'categorias'));
    }

    public function atualizar(Request $request, $id)
    {
        Subcategoria::find($id)->update($request->all());
        return redirect()->route('admin.subcategorias')->with('success','Sub-Categoria Atualizada com Sucesso!!');
    }

    public function deletar($id)
    {
        $subcategorias = Subcategoria::find($id);
        $subcategorias->delete();
        return redirect()->route('admin.subcategorias')->with('success','Sub-Categoria Removido com Sucesso!!');            
    }
}
