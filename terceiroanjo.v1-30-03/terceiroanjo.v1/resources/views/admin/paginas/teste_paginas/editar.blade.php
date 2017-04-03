@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.paginas.teste_paginas') }}">Páginas</a></li>
        <li class="active">Editar Páginas</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.paginas.teste_paginas.atualizar',$paginas->id) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.paginas.teste_paginas._form')
            <button class="btn btn-success">Atualizar</button>
        </form>              
    </div>
@endsection
