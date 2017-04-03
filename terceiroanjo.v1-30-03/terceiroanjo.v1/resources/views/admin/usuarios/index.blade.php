@extends('layouts.app')

@section('content')
    <div class="panel-heading" style="padding:12px 0 12px 12px;">
        <a href="{{ Route('admin.principal') }}">Home</a> /
        <a style="color:rgb(214, 199, 199);">Lista de Usuários</a>
        <a style="float:right;margin: -10px 10px 0px;" href="{{ Route('admin.subcategorias.adicionar') }}" title="Novo Usuário"> 
            <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
					<th>Nome</th>
                    <th>E-mail</th>
                    <th>Tipo</th>
					<th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
						<td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
						<td>{{ $usuario->tipo }}</td>
                        <td>
                            <a href="{{ route('admin.usuarios.editar',$usuario->id) }}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                            <a href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.usuarios.deletar',$usuario->id) }}' }"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div align="center">
            <!-- Paginação -->
            {!! $usuarios->links() !!}
        </div>
    </div>
@endsection