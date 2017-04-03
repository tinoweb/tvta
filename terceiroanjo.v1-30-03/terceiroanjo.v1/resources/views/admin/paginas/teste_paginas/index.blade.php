@extends('layouts.app')

@section('content')
    <div class="panel-heading" style="padding:12px 0 12px 12px;">
        <a href="{{ Route('admin.principal') }}">Home</a> /
        <a style="color:rgb(214, 199, 199);">Lista de Páginas</a> 
        <a style="float:right;margin: -10px 10px 0px;" href="{{ Route('admin.subcategorias.adicionar') }}" title="Nova Página"> 
            <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            @foreach($paginas as $pagina)
                <tr>
                    <td>{{ $pagina->id }}</td>
                    <td>{{ $pagina->titulo }}</td>
                    <td>{{ $pagina->descricao }}</td>
                    <td>{{ $pagina->tipo }}</td>
                    <td>
                        <a href="{{ route('admin.paginas.teste_paginas.editar',$pagina->id) }}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center">
            <!-- Paginação -->
            {!! $paginas->links() !!}
        </div>
    </div>
@endsection