@extends('layouts.app')

@section('content')
    <div class="panel-heading" style="padding:12px 0 12px 12px;">
        <a href="{{ Route('admin.principal') }}">Home</a> /
        <a style="color:rgb(214, 199, 199);">Lista de Vídeos</a>
        <a style="float:right;margin: -10px 10px 0px;" href="{{ Route('admin.videos.adicionar') }}" title="Novo Vídeo"> 
            <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
        </a>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Categorias</th>
                    <th>Sub-Categorias</th>
                    <th>Palestrante</th>
                    <th>Descrição</th>
                    <th>Url</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                @foreach($videos as $video)
                    <tr>
                        <th scope="row">{{ $video->id }}</th>
                        <td>{{ $video->nome }}</td>
                        <td>
                            @foreach($video->categoria as $cat)
                                @if($video->categoria->count() > 1)
                                    {{ $cat->nome }}/ 
                                @else
                                    {{ $cat->nome }} 
                                @endif
                            @endforeach
                        </td>
                        <td style="width: 35px">
                            @foreach($video->subcategoria as $cat)
                                @if($video->subcategoria-> count() > 1)
                                    {{ $cat->nome }}/
                                @else
                                    {{ $cat->nome }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $video->palestrante->nome }}</td>
                        <td>{{ str_limit($video->descricao, 200) }}</td>
                        <td>{{ $video->link_video }}</td>
                        <td><img width="100" src="{{asset($video->imagem)}}"></td>
                        <td>
                            <a href="{{route('admin.videos.editar', $video->id)}}" title="Editar Vídeo"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                            <a href="javascript:(confirm('Deseja remover esse vídeo?') ? window.location.href='{{route('admin.videos.deletar',$video->id)}}' : false)"><i class="fa fa-trash fa-2x" aria-hidden="true" title="Remover Vídeo"></i></a><br>
                            <a style="color: #222;" href="{{route('admin.videos.categorias', $video->id)}}" title="Definir Categorias"><i class="fa fa-cube fa-2x" aria-hidden="true"></i></a>
                            <a style="color: #222;" href="{{route('admin.videos.subcategorias', $video->id)}}" title="Definir Subcategorias"><i class="fa fa-cubes fa-2x" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div align="center">
            <!-- Paginação -->
            {!! $videos->links() !!}
        </div>
    </div>
@endsection
