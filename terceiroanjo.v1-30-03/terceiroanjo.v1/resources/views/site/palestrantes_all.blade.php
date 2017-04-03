@extends('layouts.site')

@section('content')
    <div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h2 class="header_1 text_6 color_1 bg_3">Palestrantes</h2>
            </div>
        </div>
    </div>

    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
            	@foreach($palestrantes as $palestrante)
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                    <div class="box_1">
                        <a data-type="lightbox" data-type="" href="{{asset($palestrante->imagem)}}">
                        	<img src="{{asset($palestrante->imagem)}}"/>
                        </a>
                        <div class="caption">
                            <h5 class="text_7 color_3">
                            	<a href="{{ Route('site.palestrante', [$palestrante->id]) }}">
                            	{{ $palestrante->nome }}</a>

                                @if(isset($palestrante->profissao))
                                    <small> ({{ $palestrante->profissao }}) </small>
                                @endif
                            </h5>
                            <p class="text_8 color_4">{{ $palestrante->descricao }}</p><br>
                        </div>
                        <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.palestrante', [$palestrante->id]) }}">Ver Vídeos </a><br><br><br>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div align="center">
        <!-- Paginação -->
        {!! $palestrantes->links() !!}
    </div>
@endsection
