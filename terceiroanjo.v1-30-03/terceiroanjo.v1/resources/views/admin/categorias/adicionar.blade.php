@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.categorias') }}">Categorias</a></li>
        <li class="active">Novo Categoria</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.categorias.salvar') }}" method="post">
            {{ csrf_field() }} <!-- criando o token para validação de dados -->
             @include('admin.categorias._form')
            <button class="btn btn-success">Adicionar</button>
        </form>                    
    </div>
@endsection
