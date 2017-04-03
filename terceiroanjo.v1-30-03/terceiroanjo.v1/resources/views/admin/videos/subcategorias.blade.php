@extends('layouts.app')

@section('content')
    <div class="panel-heading" style="padding:12px 0 12px 12px;">
        <a href="{{ Route('admin.principal') }}">Home</a> /
        <a href="{{ route('admin.videos')}}">Lista de Videos</a> /
        <a href="" style="color:rgb(214, 199, 199);">Adicionar SubCategoria  </a>
    </div>

    <div class="panel-body">
        <div class="panel-body">
            <h3>SubCategorias para o vídeo: {{$videos->nome}}</h3><br>
            <form class="form-inline" action="{{route('admin.videos.subcategorias.salvar',$videos->id)}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                    <select class="form-control" name="subcategoria_id">
                        <option>Selecione as subcategorias para o Vídeo...</option>
                        @foreach($subcategorias as $valor)
                        <option value="{{$valor->id}}">{{$valor->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success">Adicionar</button>
            </form><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SubCategorias</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($videos->subcategoria as $cat)
                        <tr>
                            <td>{{ $cat->nome }}</td>
                            <td>
                                <a href="javascript: if(confirm('Remover essa SubCategoria?')){ window.location.href = '{{ route('admin.videos.subcategorias.remover',[$videos->id,$cat->id]) }}' }"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
