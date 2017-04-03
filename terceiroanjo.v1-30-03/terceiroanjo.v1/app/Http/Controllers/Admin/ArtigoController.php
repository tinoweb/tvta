<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Artigo;
use DB;

class ArtigoController extends Controller
{
    public function index()
    {
        $artigos = Artigo::orderBy('id', 'DESC')->paginate(10);
    	return view('admin.artigos.index', compact('artigos')); //passa a variavel $palestrante como parametro
    }

    public function adicionar()
    {
    	$artigos = Artigo::all();
    	return view('admin.artigos.adicionar', compact('artigos'));
    } 

    public function salvar(Request $request)
    {
		$dados = $request->all();
    	
    	$artigos = new Artigo();
    	$artigos->nome = $dados['nome'];
    	//$artigos->descricao = $dados['descricao'];
    	$artigos->conteudo = $dados['conteudo'];
    	$artigos->data = $dados['data'];

    	$file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/artigos/".str_slug($dados['nome'],'_');
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$artigos->imagem = $diretorio.'/'.$nomeArquivo; //
    	}

        $file = $request->file('file');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "file/".str_slug($dados['nome'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "file_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $artigos->file = $diretorio.'/'.$nomeArquivo; //
        }
        
        $artigos->save();

        return redirect()->route('admin.artigos.adicionar')->with('success','Artigo Adicionado com Sucesso!!');            
    }

    public function editar($id)
    {
        $artigos = Artigo::find($id);
        if(!$artigos){
            return redirect()->route('admin.artigos.adicionar')->with('success','Não existe esse Artigo cadastrado!! Deseja Cadastrar uma nov Artigo');
        }
        return view('admin.artigos.editar', compact('artigos'));
    }

    public function atualizar(Request $request, $id)
    {
        $artigos = Artigo::find($id);
        $dados = $request->all();

    	$artigos->nome = $dados['nome'];
    	//$artigos->descricao = $dados['descricao'];
    	$artigos->conteudo = $dados['conteudo'];
    	$artigos->data = $dados['data'];

    	$file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/artigos/".str_slug($dados['nome'],'_');
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$artigos->imagem = $diretorio.'/'.$nomeArquivo; //
    	}

        $file = $request->file('file');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "file/".str_slug($dados['nome'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "file_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $artigos->file = $diretorio.'/'.$nomeArquivo; //
        }

        $artigos ->update();
        return redirect()->route('admin.artigos')->with('success','Artigo atualizado com Sucesso!!');            
    }

    public function deletar($id)
    {
        $artigos = Artigo::find($id); //busca o cliente 
        $artigos->delete(); //deleta
        return redirect()->route('admin.artigos')->with('success','Artigo Deletado com Sucesso!!');            
    }

    /*protected function downloadFile($src)
    {
        if(is_file($src)){
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $content_type = finfo_file($finfo, $src);
            finfo_close($finfo);
            $file_name = basename($src).PHP_EOL;
            $size = filesize($src);
            header("Content-Type: $content_type");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: $size");
            readfile($src);
            return true;
        } else{
            return false;
        }
    }
    public function download(){
        if(!$this->downloadFile(app_path()."/file/info.pdf")){
            return redirect()->back();
        }
    }
    */
   
    // DOWNLOAD OK +- 
    // public function download()
    // {
    //     $down = DB::table('artigos')->get();
    //     return view('admin.artigos',compact('down'));
    // }
    
    public function download($file)
    {
        // return response()->file($file_path); //Exibe arquivo na tela
        $artigos = Artigo::find($file);
        $file_path = public_path('file/'.$file);
        return response()->download($file_path);
         
        // return response()->download($file);
    }

}
