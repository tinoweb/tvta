<div class="col-md-4">
    <div class="row">
            @if(isset($paginas->imagem))
                <img width="320" src="{{ asset($paginas->imagem) }}"><br>
            @endif
    </div><br>
    <div class="row">
        <input type="file" name="imagem">
    </div>
</div>
<div class="col-md-8">
	<div class="form-group">
	    <label for="titulo">Título</label>
	    <input type="text" name="titulo" class="form-control" placeholder="Meu nome" value="{{ isset($paginas->titulo) ? $paginas->titulo : '' }}">
	</div>

	<div class="form-group">
	    <label for="descricao">Descrição</label>
	    <input type="text" name="descricao" class="form-control" placeholder="Descrição" value="{{ isset($paginas->descricao) ? $paginas->descricao : '' }}">
	</div>

	@if(isset($paginas->email))
	<div class="form-group">
	    <label for="email">Email</label>
	    <input type="text" name="email" class="form-control" placeholder="Descrição" value="{{ isset($paginas->email) ? $paginas->email : '' }}">
	</div>
	@endif

	<div class="form-group">
	    <label for="texto">Texto</label>
	    <textarea class="form-control" rows="5" name="texto" id="">
	    	{{ isset($paginas->texto) ? $paginas->texto : '' }}
	    </textarea>
	</div>

	<div class="form-group">
		<label>Mapa</label>
		<textarea class="form-control" rows="5"  name="mapa">
			{{ isset($paginas->mapa) ? $paginas->mapa : '' }}
		</textarea>
	</div>
</div>
