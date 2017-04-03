@extends('layouts.app')

@section('content')
    <div class="panel-heading" style="padding:12px 0 12px 12px;">
        <a href="{{ Route('admin.principal') }}">Home</a> /
        <a style="color:rgb(214, 199, 199);">Lista de Sub-Categorias</a>
        <a style="float:right;margin: -10px 10px 0px;" href="{{ Route('admin.subcategorias.adicionar') }}" title="Nova Sub-Categoria"> 
            <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-body">
        <div class="panel-body">
            <!--p>
                <a class="btn btn-primary" href="{{ Route('admin.subcategorias.adicionar') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
            </p-->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subcategorias as $subcategoria)
                        <tr>
                            <th scope="row">{{ $subcategoria->id }}</th>
                            <td>{{ $subcategoria->nome }}</td>
                            <th>{{ $subcategoria->categoria->nome }}</th>
                            <td>
                                <a href="{{route('admin.subcategorias.editar', $subcategoria->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                <a href="javascript:(confirm('Deseja remover essa Sub-Categoria?') ? window.location.href='{{route('admin.subcategorias.deletar',$subcategoria->id)}}' : false)"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div align="center">
                <!-- Paginação -->
                {!! $subcategorias->links() !!}
            </div>
        </div>
    </div>
@endsection
