@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.videos') }}">Lista de Vídeos</a></li>
        <li class="active">Novo Video</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.videos.salvar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }} <!-- criando o token para validação de dados -->
            @include('admin.videos._form')
            <button class="btn btn-success">Adicionar</button>
        </form>                    
    </div>
@endsection
