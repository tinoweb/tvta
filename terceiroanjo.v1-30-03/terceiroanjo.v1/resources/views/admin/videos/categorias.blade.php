@extends('layouts.app')

@section('content')
    <div class="panel-heading" style="padding:12px 0 12px 12px;">
        <a href="{{ Route('admin.principal') }}">Home</a> /
        <a href="{{ route('admin.videos')}}">Lista de Videos</a> /
        <a href="" style="color:rgb(214, 199, 199);">Adicionar Categoria</a>
    </div>

    <div class="panel-body">
        <div class="panel-body">
            <h3>Categorias para o vídeo: {{$videos->nome}}</h3><br>
            <form class="form-inline" action="{{route('admin.videos.categorias.salvar',$videos->id)}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                    <select class="form-control" name="categoria_id">
                        <option>Selecione as categorias para o Vídeo...</option>
                        @foreach($categorias as $valor)
                        <option value="{{$valor->id}}">{{$valor->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success">Adicionar</button>
            </form><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Categorias</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($videos->categoria as $cat)
                        <tr>
                            <td>{{ $cat->nome }}</td>
                            <td>
                                <a href="javascript: if(confirm('Remover essa categoria?')){ window.location.href = '{{ route('admin.videos.categorias.remover',[$videos->id,$cat->id]) }}' }"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
