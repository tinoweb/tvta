@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.artigos') }}">Artigos</a></li>
        <li class="active">Novo Artigo</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.artigos.salvar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }} <!-- criando o token para validação de dados -->
            @include('admin.artigos._form')
            <button class="btn btn-success">Adicionar</button>
        </form>                    
    </div>
@endsection
