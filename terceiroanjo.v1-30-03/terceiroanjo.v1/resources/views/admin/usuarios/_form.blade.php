<div class="col-md-4">
    <div class="row">
            @if(isset($usuario->imagem))
                <img width="320" src="{{ asset($usuario->imagem) }}"><br>
            @endif
    </div><br>
    <div class="row">
        <input type="file" name="imagem">
    </div>
</div>
<div class="col-md-8">
	<div class="form-group">
	    <label for="nome">Nome</label>
	    <input type="text" name="name" class="form-control" placeholder="Meu nome" value="{{ isset($usuario->name) ? $usuario->name : '' }}">
	</div>
	<div class="form-group">
	    <label for="email">Email</label>
	    <input type="text" name="email" class="form-control" placeholder="email@email.com" value="{{ isset($usuario->email) ? $usuario->email : '' }}">
	</div>
	<div class="form-group">
	    <label for="senha">Senha</label>
	    <input type="password" name="password" class="form-control" placeholder="********">
	</div>
	<div class="form-group">
	    <label for="nome">Profissão</label>
	    <input type="text" name="profissao" class="form-control" placeholder="Ex.: Administrador" value="{{ isset($usuario->profissao) ? $usuario->profissao : '' }}">
	</div>
	<div class="form-group">
	    <label for="descricao">Descrição</label>
	    <textarea class="form-control" rows="5" name="descricao" id="">
	    	{{ isset($usuario->descricao) ? $usuario->descricao : '' }}
	    </textarea>
	</div>
	
	Tipo:
	<div class="radio">
	  <label>
	    <input type="radio" name="tipo" value="usuario" {{isset($usuario->tipo) && $usuario->tipo == 1 ? 'checked' : '' }} required>Usuário
	  </label>
	</div>
	<div class="radio">
	  <label>
	    <input type="radio" name="tipo" value="equipe" {{isset($usuario->tipo) && $usuario->tipo == 0 ? 'checked' : '' }} required>Equipe
	  </label>
	</div>
</div>



