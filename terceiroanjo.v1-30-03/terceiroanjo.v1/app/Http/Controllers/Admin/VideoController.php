<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Categoria;
use App\Subcategoria;
use App\Palestrante;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('id', 'DESC')->paginate(10);
    	return view('admin.videos.index', compact('videos', 'categorias')); 
    }

    public function adicionar()
    {
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::orderBy('nome')->get();
        $palestrantes = Palestrante::all();

        return view('admin.videos.adicionar', compact('categorias','subcategorias','palestrantes','videos'));
    } 

    public function ManyToMany()
    {
        $Categoria = Categoria::where('nome', 'Daphney Mraz')->first();
        echo "<b>Categoria: {$Categoria->nome} </b><br>";

        $videos = $Categoria->video;
        echo "<b>Videos: </b>";
        foreach ($videos as $video) {
             echo "<b> {$video->nome}, </b>";
        }
    }

    public function ManyToManyInverse()
    {
        $videos = Video::where('nome', 'Teste1')->first();
        echo "<b>Video: {$videos->nome} </b><br>";

        $categorias = $videos->categoria;
        echo "<b>Categorias: </b>";
        foreach ($categorias as $categoria) {
             echo "<b> {$categoria->nome}, </b>";
        }
    }

    public function ManyToManyInsert()
    {
        $dataform = [1,3];

        $videos = Video::find(1);
        echo "<b>Video: {$videos->nome} </b><br>";

        //$videos->categoria()->attach($dataform);cadastra os msms cadastros ao ser atualizado a pagina
        //$videos->categoria()->detach(1);//deleta os cadastro q vc passar
        $videos->categoria()->sync($dataform);//sincroniza

        $categorias = $videos->categoria;
        echo "<b>Categorias: </b>";
        foreach ($categorias as $categoria) {
             echo "<b> {$categoria->nome}, </b>";
        }
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        
        $videos = new Video();
        $videos->nome = $dados['nome'];
        $videos->descricao = $dados['descricao'];
        $videos->link_video = $dados['link_video'];
        $videos->id_palestrante= $dados['id_palestrante'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/videos/".str_slug($dados['nome'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $videos->imagem = $diretorio.'/'.$nomeArquivo; //
        }
        
        $videos->save();

        return redirect()->route('admin.videos.adicionar')->with('success','Video Adicionado com Sucesso!!');            
    }

    public function editar($id)
    {
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        $palestrantes = Palestrante::all();

        $videos = Video::find($id);
        if(!$videos){
            return redirect()->route('admin.videos.adicionar')->with('success','Não existe esse Vídeo cadastrado!! Deseja Cadastrar uma nov Palestrante');
        }
        return view('admin.videos.editar', compact('videos', 'categorias', 'subcategorias', 'palestrantes'));
    }

    public function atualizar(Request $request, $id)
    {
        $videos = Video::find($id);
        $dados = $request->all();

        $videos->nome = $dados['nome'];
        $videos->descricao = $dados['descricao'];
        $videos->link_video = $dados['link_video'];
        $videos->id_palestrante= $dados['id_palestrante'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/videos/".str_slug($dados['nome'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $videos->imagem = $diretorio.'/'.$nomeArquivo;
        }
        
        $videos ->update();
        return redirect()->route('admin.videos')->with('success','Video atualizado com Sucesso!!');            
    }

    public function deletar($id)
    {
        $videos = Video::find($id); //busca 
        $videos->delete(); //deleta
        return redirect()->route('admin.videos')->with('success','Vídeo Deletado com Sucesso!!');            
    }

    public function videos_all()
    {
        $videos = Video::all();
        $videos = Video::paginate(12);
        return view('videos_all', compact('videos'));
    }

    public function categorias($id)
    {
        $videos = Video::find($id);
        $categorias = Categoria::all();
        return view('admin.videos.categorias',compact('videos','categorias'));
    }

    public function salvarCategorias(Request $request,$id)
    {
        $videos = Video::find($id);
        $dados = $request->all();
        $categorias = Categoria::find($dados['categoria_id']);
        $videos->adicionaCategoria($categorias);
        return redirect()->back();
    }

    public function removerCategorias($id,$categoria_id)
    {        
        $videos = Video::find($id);        
        $categorias = Categoria::find($categoria_id);
        $videos->removeCategoria($categorias);
        return redirect()->back();
    }

    public function subCategorias($id)
    {
        $videos = Video::find($id);
        $subcategorias = Subcategoria::all();
        return view('admin.videos.subcategorias',compact('videos','subcategorias'));
    }

    public function salvarSubCategorias(Request $request,$id)
    {
        $videos = Video::find($id);
        $dados = $request->all();
        $subcategorias = Subcategoria::find($dados['subcategoria_id']);
        $videos->adicionaSubCategoria($subcategorias);
        return redirect()->back();
    }

    public function removerSubCategorias($id, $subcategoria_id)
    {        
        $videos = Video::find($id);        
        $subcategorias = Subcategoria::find($subcategoria_id);
        $videos->removeSubCategoria($subcategorias);
        return redirect()->back();
    }
    



    

}
