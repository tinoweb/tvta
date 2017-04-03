<?php

/* Testes Many to Many */
$this->get('many-to-many', 'Admin\VideoController@ManyToMany');
$this->get('many-to-many-inverse', 'Admin\VideoController@ManyToManyInverse');
$this->get('many-to-many-insert', 'Admin\VideoController@ManyToManyInsert');


/* HOME SITE */
Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@home']); 


/*BUSCA*/
//Route::get('categoria',['as'=>'site.categoria', 'uses'=>'Site\CategoriaController@busca']);
//Route::get('/busca',['as'=>'site.categoria', 'uses'=>'Site\CategoriaController@busca']);


/* Páginas categorias e categoria*/
Route::get('/categorias', ['as'=>'site.categorias_all', 'uses'=>'Site\CategoriaController@categorias_all']);
Route::get('/categoria/{id}', ['as'=>'site.categoria', 'uses'=>'Site\CategoriaController@categoria']);
//Route::get('/categoria/{id}', ['as'=>'site.categoria.busca', 'uses'=>'Site\CategoriaController@busca']);


/* Páginas palestrantes e palestrante*/
Route::get('/palestrantes', ['as'=>'site.palestrantes_all', 'uses'=>'Site\PalestranteController@palestrantes_all']); //lista na pagina palestrantes_all
Route::get('/palestrante/{id}', ['as'=>'site.palestrante', 'uses'=>'Site\PalestranteController@palestrante']);


/* Páginas videos_all e video*/
Route::get('/videos', ['as'=>'site.videos_all', 'uses'=>'Site\VideoController@videos_all']); //lista na pagina videos_all
Route::get('/video/{id}', ['as'=>'site.video', 'uses'=>'Site\VideoController@video']); //lista na pagina videos_all


/* Páginas artigos e artigo*/
Route::get('/artigos', ['as'=>'site.artigos', 'uses'=>'Site\ArtigoController@artigos']); //lista na pagina palestrantes_all
Route::get('/artigo/{id}', ['as'=>'site.artigo', 'uses'=>'Site\ArtigoController@artigo']);


/* nossa_historia, contatos e contatos/enviar*/
Route::get('/nossa_historia', ['as'=>'site.nossa_historia', 'uses'=>'Site\PaginaController@nossa_historia']);
Route::get('/contatos', ['as'=>'site.contatos', 'uses'=>'Site\PaginaController@contato']);
Route::post('/contatos/enviar',['as'=>'site.contatos.enviar', 'uses'=>'Site\PaginaController@enviarContato']);


/* Quero Doar / Quero Participar / Quero Divulgar */
Route::get('/quero_doar',['as'=>'quero_doar','uses'=>'Site\DoacaoController@doar']); 
Route::get('/quero_participar',['as'=>'quero_participar','uses'=>'Site\DoacaoController@participar']); 
Route::get('/quero_divulgar',['as'=>'quero_divulgar','uses'=>'Site\DoacaoController@divulgar']); 


Route::get('/series',['as'=>'series', function () {
    return view('site.series');
}]);

Route::get('streaming',['as'=>'streaming', function () {
    return view('site.streaming');
}]);

Route::get('/radio',['as'=>'radio', function () {
    return view('site.radio');
}]);

Route::get('/radio_downloads',['as'=>'radio_downloads', function () {
    return view('site.radio_downloads');
}]);

Route::get('galerias',['as'=>'galerias', function () {
    return view('site.galerias');
}]);


/* LOGIN */
Route::get('/admin/login',['as'=>'admin.login', function(){
    return view('admin.login.index');
}]);
Route::post('/admin/login',['as'=>'admin.login', 'uses'=>'Admin\UsuarioController@login']);


/* GROUP ACESSO ADMIN */
Route::group(['middleware'=>'auth'], function(){

    /* LOGOUT */
    Route::get('/admin/login/sair',['as'=>'admin.login.sair', 'uses'=>'Admin\UsuarioController@sair']);

    /* HOME ADMIN */
    Route::get('/admin',['as'=>'admin.principal', function(){
        return view('admin.principal.index');
    }]);

    /* USUÁRIOS */
    Route::get('/admin/usuarios',['as'=>'admin.usuarios', 'uses'=>'Admin\UsuarioController@index']);
    Route::get('/admin/usuarios/adicionar',['as'=>'admin.usuarios.adicionar', 'uses'=>'Admin\UsuarioController@adicionar']);
    Route::post('/admin/usuarios/salvar',['as'=>'admin.usuarios.salvar', 'uses'=>'Admin\UsuarioController@salvar']);
    Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar', 'uses'=>'Admin\UsuarioController@editar']);
    Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar', 'uses'=>'Admin\UsuarioController@atualizar']);
    Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar', 'uses'=>'Admin\UsuarioController@deletar']);

    /* CATEGORIAS */
    Route::get('/admin/categorias', ['as'=>'admin.categorias', 'uses'=>'Admin\CategoriaController@index']); // Listar na pagina index de categorias em admin
    Route::get('/admin/categorias/adicionar', ['as'=>'admin.categorias.adicionar', 'uses'=>'Admin\CategoriaController@adicionar']);
    Route::post('/admin/categorias/salvar', ['as'=>'admin.categorias.salvar', 'uses'=>'Admin\CategoriaController@salvar']);
    Route::get('/admin/categorias/deletar/{id}', ['as'=>'admin.categorias.deletar', 'uses'=>'Admin\CategoriaController@deletar']);
    Route::get('/admin/categorias/editar/{id}', ['as'=>'admin.categorias.editar', 'uses'=>'Admin\CategoriaController@editar']);
    Route::put('/admin/categorias/atualizar/{id}', ['as'=>'admin.categorias.atualizar', 'uses'=>'Admin\CategoriaController@atualizar']);
    
    /* SUBCATEGORIAS */
    Route::get('/admin/subcategorias', ['as'=>'admin.subcategorias', 'uses'=>'Admin\SubCategoriaController@index']); // Listar na pagina index de subcategorias em admin
    Route::get('/admin/subcategorias/adicionar', ['as'=>'admin.subcategorias.adicionar', 'uses'=>'Admin\SubCategoriaController@adicionar']);
    Route::post('/admin/subcategorias/salvar', ['as'=>'admin.subcategorias.salvar', 'uses'=>'Admin\SubCategoriaController@salvar']);
    Route::get('/admin/subcategorias/deletar/{id}', ['as'=>'admin.subcategorias.deletar', 'uses'=>'Admin\SubCategoriaController@deletar']);
    Route::get('/admin/subcategorias/editar/{id}', ['as'=>'admin.subcategorias.editar', 'uses'=>'Admin\SubCategoriaController@editar']);
    Route::put('/admin/subcategorias/atualizar/{id}', ['as'=>'admin.subcategorias.atualizar', 'uses'=>'Admin\SubCategoriaController@atualizar']);
    
    /* PALESTRANTES */
    Route::get('/admin/palestrantes', ['as'=>'admin.palestrantes', 'uses'=>'Admin\PalestranteController@index']); //lista na pagina index de palestrantes em admin
    Route::get('/admin/palestrantes/adicionar', ['as'=>'admin.palestrantes.adicionar', 'uses'=>'Admin\PalestranteController@adicionar']);
    Route::post('/admin/palestrantes/salvar', ['as'=>'admin.palestrantes.salvar', 'uses'=>'Admin\PalestranteController@salvar']);
    Route::get('/admin/palestrantes/deletar/{id}', ['as'=>'admin.palestrantes.deletar', 'uses'=>'Admin\PalestranteController@deletar']);
    Route::get('/admin/palestrantes/editar/{id}', ['as'=>'admin.palestrantes.editar', 'uses'=>'Admin\PalestranteController@editar']);
    Route::put('/admin/palestrantes/atualizar/{id}', ['as'=>'admin.palestrantes.atualizar', 'uses'=>'Admin\PalestranteController@atualizar']);

    /* VIDEOS */
    Route::get('/admin/videos', ['as'=>'admin.videos', 'uses'=>'Admin\VideoController@index']); //lista na pagina index de videos em admin
    Route::get('/admin/videos/adicionar', ['as'=>'admin.videos.adicionar', 'uses'=>'Admin\VideoController@adicionar']);
    Route::post('/admin/videos/salvar', ['as'=>'admin.videos.salvar', 'uses'=>'Admin\VideoController@salvar']);
    Route::get('/admin/videos/deletar/{id}', ['as'=>'admin.videos.deletar', 'uses'=>'Admin\VideoController@deletar']);
    Route::get('/admin/videos/editar/{id}', ['as'=>'admin.videos.editar', 'uses'=>'Admin\VideoController@editar']);
    Route::put('/admin/videos/atualizar/{id}', ['as'=>'admin.videos.atualizar', 'uses'=>'Admin\VideoController@atualizar']);
    /* VIDEOS_CATEGORIA */
    Route::get('/admin/videos/categorias/{id}',['as'=>'admin.videos.categorias', 'uses'=>'Admin\VideoController@categorias']);
    Route::post('/admin/videos/categorias/salvar/{id}',['as'=>'admin.videos.categorias.salvar', 'uses'=>'Admin\VideoController@salvarCategorias']);
    Route::get('/admin/videos/categorias/remover/{id}/{categoria_id}',['as'=>'admin.videos.categorias.remover', 'uses'=>'Admin\VideoController@removerCategorias']);
    /*VIDEOS_SUBCATEGORIA*/
    Route::get('/admin/videos/subcategorias/{id}',['as'=>'admin.videos.subcategorias', 'uses'=>'Admin\VideoController@subCategorias']);
    Route::post('/admin/videos/subcategorias/salvar/{id}',['as'=>'admin.videos.subcategorias.salvar', 'uses'=>'Admin\VideoController@salvarSubCategorias']);
    Route::get('/admin/videos/subcategorias/remover/{id}/{subcategoria_id}',['as'=>'admin.videos.subcategorias.remover', 'uses'=>'Admin\VideoController@removerSubCategorias']);

    /* ARTIGOS */
    Route::get('/admin/artigos', ['as'=>'admin.artigos', 'uses'=>'Admin\ArtigoController@index']); //lista na pagina index de artigos em admin
    Route::get('/admin/artigos/adicionar', ['as'=>'admin.artigos.adicionar', 'uses'=>'Admin\ArtigoController@adicionar']);
    Route::post('/admin/artigos/salvar', ['as'=>'admin.artigos.salvar', 'uses'=>'Admin\ArtigoController@salvar']);
    Route::get('/admin/artigos/deletar/{id}', ['as'=>'admin.artigos.deletar', 'uses'=>'Admin\ArtigoController@deletar']);
    Route::get('/admin/artigos/editar/{id}', ['as'=>'admin.artigos.editar', 'uses'=>'Admin\ArtigoController@editar']);
    Route::put('/admin/artigos/atualizar/{id}', ['as'=>'admin.artigos.atualizar', 'uses'=>'Admin\ArtigoController@atualizar']);
    Route::get('/admin/artigos/download/{file}', ['as'=>'download', 'uses'=>'Admin\ArtigoController@download']);
    
    // DOWNLOAD OK +- 
    // Route::get('/download', 'Admin\ArtigoController@download');
    Route::get('/download/{file}', 'Admin\ArtigoController@download');

    /* PÁGINAS */
    Route::get('/admin/paginas/teste_paginas',['as'=>'admin.paginas.teste_paginas', 'uses'=>'Admin\PaginaController@index']);
    Route::get('/admin/paginas/teste_paginas/editar/{id}',['as'=>'admin.paginas.teste_paginas.editar', 'uses'=>'Admin\PaginaController@editar']);
    Route::put('/admin/paginas/teste_paginas/atualizar/{id}',['as'=>'admin.paginas.teste_paginas.atualizar', 'uses'=>'Admin\PaginaController@atualizar']);

    /* PÁGINAS-NOSSA HITSTÓRIA-CONTATOS-FOTOS */

    /**/

    /**/

    /**/

    /**/

});


