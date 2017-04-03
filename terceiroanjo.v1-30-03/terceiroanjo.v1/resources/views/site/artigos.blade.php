@extends('layouts.site')

@section('content')
	<div class="wrap_6 wrap_7">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">Artigos</h2>

					@foreach($artigos as $artigo)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left"><img src="{{asset($artigo->imagem)}}" alt="img 1"/></div>
                            <div class="caption_3">
                                <h3 class="text_7 color_3">
                                    <a href="{{ Route('site.artigo', [$artigo->id]) }}">{{ $artigo->nome }}</a>
                                </h3>

                                <p class="text_8 color_4">
                                	{{ date('l, d M Y', strtotime($artigo->data)) }}
                                    <!--Sunday, September 22, 2014 |
                                    posted by: <a href="#">admin</a> |
                                    <a href="#">comments: 7</a>-->
                                </p>

                                <p class="text_9 color_3">{{ $artigo->descricao }}</p>

                                <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.artigo', [$artigo->id]) }}">Ler Artigo</a>
                                <a class="btn_1 text_7 color_1 bg_3" href="#">Download</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
					@endforeach
					<div align="center">
				        <!-- Paginação -->
				        {!! $artigos->links() !!}
				    </div>
                </div>
            </div>
        </div>
@endsection