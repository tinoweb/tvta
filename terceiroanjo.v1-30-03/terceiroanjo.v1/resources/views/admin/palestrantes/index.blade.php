@extends('layouts.app')

@section('content')
    <div class="panel-heading" style="padding:12px 0 12px 12px;">
    <a href="{{ Route('admin.principal') }}">Home</a> /
    <a style="color:rgb(214, 199, 199);">Lista de Palestrantes</a>
    <a style="float:right;margin: -10px 10px 0px;" href="{{ Route('admin.subcategorias.adicionar') }}" title="Novo Palestrante"> 
        <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
    </a>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Profissão</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($palestrantes as $palestrante)
                    <tr>
                        <th scope="row">{{ $palestrante->id }}</th>
                        <td>{{ $palestrante->nome }}</td>
                        <td>{{ $palestrante->profissao }}</td>
                        <td>{{ $palestrante->descricao }}</td>
                        <td><img width="100" src="{{asset($palestrante->imagem)}}"></td>
                        <td>
                            <a href="{{route('admin.palestrantes.editar', $palestrante->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                            <a href="javascript:(confirm('Deseja remover esse Palestrante?') ? window.location.href='{{route('admin.palestrantes.deletar',$palestrante->id)}}' : false)"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div align="center">
            <!-- Paginação -->
            {!! $palestrantes->links() !!}
        </div>
    </div>
@endsection
