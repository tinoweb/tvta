@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.palestrantes') }}">Palestrantes</a></li>
        <li class="active">Novo Palestrante</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.palestrantes.salvar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }} <!-- criando o token para validação de dados -->
            @include('admin.palestrantes._form')
            <button class="btn btn-success">Adicionar</button>
        </form>                    
    </div>
@endsection
