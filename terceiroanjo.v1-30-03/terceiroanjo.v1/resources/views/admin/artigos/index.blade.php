@extends('layouts.app')

@section('content')
    <div class="panel-heading" style="padding:12px 0 12px 12px;">
    <a href="{{ Route('admin.principal') }}">Home</a> /
    <a style="color:rgb(214, 199, 199);">Lista de Artigos</a>
    <a style="float:right;margin: -10px 10px 0px;" href="{{ Route('admin.artigos.adicionar') }}" title="Novo Artigo"> 
        <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
    </a>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Conteudo</th>
                    <th>Data</th>
                    <th>Arquivo</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artigos as $artigo)
                    <tr>
                        <th scope="row">{{ $artigo->id }}</th>
                        <td>{{ $artigo->nome }}</td>
                        <td>{{ str_limit($artigo->conteudo, 300)  }}</td>
                        <td>{{ date('d/m/Y', strtotime($artigo->data)) }}</td>
                        <td>{{ $artigo->file }}</td>
                        <td><img width="100" src="{{asset($artigo->imagem)}}"></td>
                        <td>
                            <a href="{{Route('admin.artigos.editar', $artigo->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                            <a href="javascript:(confirm('Deseja remover esse artigo?') ? window.location.href='{{Route('admin.artigos.deletar',$artigo->id)}}' : false)"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                            
                            {{-- DOWNLOAD OK +- --}}
                            {{-- <a href="{{ Route('download', $artigo->file) }}" download="{{$artigo->file}}" style="color:#000;"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a> --}}
                            {{-- <a href="download/{{$artigo->file}}" download="{{$artigo->file}}" style="color:#000;"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a> --}}
                            
                            {{-- <a href="/download" style="color:#000;"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>  --}}

                            <a href="{{Route('download',$artigo->file)}}}" style="color:#000;"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div align="center">
            <!-- Paginação -->
            {!! $artigos->links() !!}
        </div>
    </div>
@endsection
