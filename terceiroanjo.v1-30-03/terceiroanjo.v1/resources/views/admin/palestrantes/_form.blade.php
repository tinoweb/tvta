<div class="col-md-4">
    <div class="row">
            @if(isset($palestrantes->imagem))
                <img width="320" src="{{ asset($palestrantes->imagem) }}"><br>
            @endif
    </div><br>
    <div class="row">
        <input type="file" name="imagem">
    </div>
</div>
<div class="col-md-8">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Nome do Palestrante" value="{{ isset($palestrantes->nome) ? $palestrantes->nome : '' }}">
    </div>
    <div class="form-group">
        <label for="profissao">Profissão</label>
        <input type="text" name="profissao" class="form-control" placeholder="Profissão do Palestrante" value="{{ isset($palestrantes->profissao) ? $palestrantes->profissao : '' }}">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" class="form-control" placeholder="Descrição do Palestrante" value="{{ isset($palestrantes->descricao) ? $palestrantes->descricao : '' }}">
    </div><br>
</div>