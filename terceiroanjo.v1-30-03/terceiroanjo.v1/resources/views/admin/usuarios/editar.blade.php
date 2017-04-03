@extends('layouts.app')

@section('content')
    <ol class="breadcrumb panel-heading">
        <li><a href="{{ Route('admin.usuarios') }}">Usuários</a></li>
        <li class="active">Editar Usuário</li>
    </ol>
    <div class="panel-body">
        <form action="{{ route('admin.usuarios.atualizar',$usuario->id) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.usuarios._form')
            <button class="btn btn-success">Atualizar</button>
        </form>              
    </div>
@endsection
