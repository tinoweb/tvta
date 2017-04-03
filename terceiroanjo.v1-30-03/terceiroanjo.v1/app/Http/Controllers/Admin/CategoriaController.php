<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriaController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
        
    public function index()
    {
        //$categorias = Categoria::all();
        $categorias = Categoria::orderBy('id', 'DESC')->paginate(10);//aki define a qtd de cliente por pagina
    	return view('admin.categorias.index', compact('categorias'));
    }

    public function adicionar()
    {
        return view('admin.categorias.adicionar');
    } 

    public function salvar(Request $request)
    {
        Categoria::create($request->all()); // pegar os dados do formulario e salva no banco
        return redirect()->route('admin.categorias.adicionar')->with('success','Categoria Adicionado com Sucesso!!');
    }


    public function editar($id)
    {
        $categorias = Categoria::find($id);
        if(!$categorias){
            return redirect()->route('admin.categorias.adicionar')->with('success','Não existe essa Categoria cadastrado!! Deseja Cadastrar uma nova Categoria');
        }

        return view('admin.categorias.editar', compact('categorias'));
    }

    public function atualizar(Request $request, $id)
    {
        //$categorias = Categoria::find($id);
        //$categorias->update($request->all());
        Categoria::find($id)->update($request->all());
        return redirect()->route('admin.categorias')->with('success','Categoria Atualizada com Sucesso!!');
    }

    public function deletar($id)
    {
        $categorias = Categoria::find($id); //busca o cliente 
        $categorias->delete(); //deleta
        return redirect()->route('admin.categorias')->with('success','Categoria Deletado com Sucesso!!');            
    }
    
    
}
