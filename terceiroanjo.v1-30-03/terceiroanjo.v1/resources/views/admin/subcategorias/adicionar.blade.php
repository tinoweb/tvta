@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.subcategorias') }}">Sub-Categoria</a></li>
        <li class="active">Novo Sub-Categoria</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.subcategorias.salvar') }}" method="post">
            {{ csrf_field() }} <!-- criando o token para validação de dados -->
             @include('admin.subcategorias._form')
            <button class="btn btn-success">Adicionar</button>
        </form>                    
    </div>
@endsection
