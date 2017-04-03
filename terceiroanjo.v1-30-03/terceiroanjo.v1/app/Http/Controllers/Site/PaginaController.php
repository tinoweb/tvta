<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pagina;
use App\PSobreNos;
use App\User;
use App\Categoria;
use App\Palestrante;

class PaginaController extends Controller
{
    public function nossa_historia()
    {
        $categorias = Categoria::all();
        $palestrantes = Palestrante::all();
        $equipes = User::where('tipo','=','equipe')->get();
        $pagina = Pagina::where('tipo','=','nossa_historia')->first();
        return view('site.nossa_historia',compact('pagina','equipes', 'categorias', 'palestrantes'));
    }

    public function contato()
    {
        $categorias = Categoria::all();
        $palestrantes = Palestrante::all();
        $pagina = Pagina::where('tipo','=','contato')->first();
        return view('site.contatos',compact('pagina', 'categorias', 'palestrantes'));
    }

    public function enviarContato(Request $request)
    {
    	$pagina = Pagina::where('tipo','=','contato')->first();
    	$email = $pagina->email;

        \Mail::send('emails.contato', ['request'=>$request], function($m) use ($request,$email){
            $m->from($request['email'], $request['nome']);
            $m->replyTo($request['email'], $request['nome']);
            $m->subject("Contato pelo Site");
            $m->to($email, 'Contato TV Terceiro Anjo');
        });

    	return redirect()->route('site.contatos')->with('success','Contato enviado com sucesso!!');
    }

}
