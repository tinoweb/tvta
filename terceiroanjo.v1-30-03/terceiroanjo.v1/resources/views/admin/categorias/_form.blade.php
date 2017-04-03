<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome da Categoria" value="{{ isset($categorias->nome) ? $categorias->nome : '' }}">
</div>