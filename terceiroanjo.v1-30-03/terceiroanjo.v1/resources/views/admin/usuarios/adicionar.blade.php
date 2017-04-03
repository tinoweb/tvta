@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.usuarios') }}">Usuários</a></li>
        <li class="active">Novo Usuário</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.usuarios.salvar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }} <!-- criando o token para validação de dados -->
            @include('admin.usuarios._form')
            <button class="btn btn-success">Adicionar</button>
        </form>                    
    </div>
@endsection
