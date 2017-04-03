@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.videos') }}">Lista de Vídeos</a></li>
        <li class="active">Novo Vídeo</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.videos.atualizar', $videos->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }} <!-- criando o token para validação de dados -->
            <input type="hidden" name="_method" value="put"><!--input para mudar o methodo para put-->
            @include('admin.videos._form')
            <button class="btn btn-success">Atualizar</button>
        </form>                    
    </div>
@endsection
