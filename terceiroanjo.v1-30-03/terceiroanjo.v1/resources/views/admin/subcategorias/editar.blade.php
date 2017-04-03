@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.subcategorias') }}">Sub-Categorias</a></li>
        <li class="active">Editar Sub-Categoria</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.subcategorias.atualizar', $subcategorias->id) }}" method="post">
            {{ csrf_field() }} <!-- criando o token para validação de dados -->
            <input type="hidden" name="_method" value="put">
             @include('admin.subcategorias._form')
            <button class="btn btn-success">Atualizar</button>
        </form>                    
    </div>
@endsection
