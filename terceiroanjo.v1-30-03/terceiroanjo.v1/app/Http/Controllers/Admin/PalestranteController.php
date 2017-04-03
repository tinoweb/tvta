<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Palestrante;
use App\Categoria;


class PalestranteController extends Controller
{
    public function index()
    {
        $palestrantes = Palestrante::orderBy('id', 'DESC')->paginate(10);
    	return view('admin.palestrantes.index', compact('palestrantes')); //passa a variavel $palestrante como parametro
    }

    public function adicionar()
    {
    	//$categorias = Categoria::all();
    	return view('admin.palestrantes.adicionar', compact('palestrantes'));
    } 

    public function salvar(Request $request)
    {
		$dados = $request->all();
    	
    	$palestrantes = new Palestrante();
    	$palestrantes->nome = $dados['nome'];
    	$palestrantes->profissao = $dados['profissao'];
    	$palestrantes->descricao = $dados['descricao'];
    	//$palestrantes->id_categoria= $dados['id_categoria'];

    	$file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/palestrantes/".str_slug($dados['nome'],'_');
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$palestrantes->imagem = $diretorio.'/'.$nomeArquivo; //
    	}
        
        $palestrantes->save();

        return redirect()->route('admin.palestrantes.adicionar')->with('success','Palestrante Adicionado com Sucesso!!');            
    }

    public function editar($id)
    {
        //$categorias = Categoria::all();
        $palestrantes = Palestrante::find($id);
        if(!$palestrantes){
            return redirect()->route('admin.palestrantes.adicionar')->with('success','Não existe esse Palestrante cadastrado!! Deseja Cadastrar uma nov Palestrante');
        }
        return view('admin.palestrantes.editar', compact('palestrantes', 'categorias'));
    }

    public function atualizar(Request $request, $id)
    {
        $palestrantes = Palestrante::find($id);
        $dados = $request->all();

        $palestrantes->nome = $dados['nome'];
        //$palestrantes->id_categoria= $dados['id_categoria'];
        $palestrantes->profissao = $dados['profissao'];
        $palestrantes->descricao = $dados['descricao'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/palestrantes/".str_slug($dados['nome'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $palestrantes->imagem = $diretorio.'/'.$nomeArquivo;
        }
        
        $palestrantes ->update();
        return redirect()->route('admin.palestrantes')->with('success','Palestrante atualizado com Sucesso!!');            
    }

    public function deletar($id)
    {
        $palestrantes = Palestrante::find($id); //busca o cliente 
        $palestrantes->delete(); //deleta
        return redirect()->route('admin.palestrantes')->with('success','Palestrantes Deletado com Sucesso!!');            
    }


}
