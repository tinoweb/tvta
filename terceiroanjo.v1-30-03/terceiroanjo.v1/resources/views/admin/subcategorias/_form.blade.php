 <div class="form-group">
    <label for="categoria">Categorias</label>
    <select class="form-control" name="id_categoria">
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{(isset($subcategorias->id_categoria) && $subcategorias->id_categoria == $categoria->id  ? 'selected' : '')}}> 
                {{ $categoria->nome }} 
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome da Sub-Categoria" value="{{ isset($subcategorias->nome) ? $subcategorias->nome : '' }}">
</div>