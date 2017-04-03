<div class="col-md-4">
    <div class="row">
            @if(isset($artigos->imagem))
                <img width="320" src="{{ asset($artigos->imagem) }}"><br>
            @endif
    </div><br>
    <div class="row">
    <label for="arquivo">Imagem</label>
        <input type="file" name="imagem">
    </div><br>
    <div class="row">
        <label for="arquivo">Arquivo</label>
        <input type="file" name="file">
    </div>
</div>
<div class="col-md-8">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Nome do Artigo" value="{{ isset($artigos->nome) ? $artigos->nome : '' }}">
    </div>
    <!--div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" rows="10" name="descricao" id="" placeholder="Descrição do Video">
            {{ isset($artigos->descricao) ? $artigos->descricao : '' }}
        </textarea>
    </div-->   
    <div class="form-group">
        <label for="conteudo">Conteudo</label>
        <textarea class="form-control" rows="20" name="conteudo" id="" placeholder="Conteudo do Video">
            {{ isset($artigos->conteudo) ? $artigos->conteudo : '' }}
        </textarea>
    </div>   
    <div class="form-group">
        <label for="data">Data</label>
        <input type="date" name="data" class="form-control" placeholder="data do Artigo" value="{{ isset($artigos->data) ? $artigos->data : '' }}">
    </div><br>
</div>