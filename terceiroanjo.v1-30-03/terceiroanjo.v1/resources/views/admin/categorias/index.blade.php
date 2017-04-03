@extends('layouts.app')

@section('content')
    <div class="panel-heading" style="padding:12px 0 12px 12px;">
        <a href="{{ Route('admin.principal') }}">Home</a> /
        <a style="color:rgb(214, 199, 199);">Lista de Categorias</a>
        <a style="float:right;margin: -10px 10px 0px;" href="{{ Route('admin.categorias.adicionar') }}" title="Nova Categoria"> 
            <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-body">
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <th scope="row">{{ $categoria->id }}</th>
                            <td>{{ $categoria->nome }}</td>
                            <td>
                                <a href="{{route('admin.categorias.editar', $categoria->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                <a href="javascript:(confirm('Deseja remover essa Categoria?') ? window.location.href='{{route('admin.categorias.deletar',$categoria->id)}}' : false)"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div align="center">
                <!-- Paginação -->
                {!! $categorias->links() !!}
            </div>
        </div>
    </div>
@endsection
