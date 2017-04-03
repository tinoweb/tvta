@extends('layouts.site')

@section('content')
	<div class="wrap_6 wrap_7">
        <div class="row">
            <div class="col-md-12">
                <h2 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">{{ $artigos->nome }}</h2>
                <div class="wrap_4">
                    <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                        <div class="put-left"><img src="{{asset($artigos->imagem)}}" alt="img 1"/></div>
                        <div class="caption_3">
                            <!--h3 class="text_7 color_3">
                                <a href="#">{{ $artigos->nome }}</a>
                            </h3-->

                            <p class="text_8 color_4" style="font-size: 12px;">
                                {{ date('D, d M, Y', strtotime($artigos->data)) }}
                            </p>

                            <p class="text_9 color_3" style="font-size: 16px; text-align: justify;">{{ $artigos->conteudo }}</p>

                            <a class="btn_1 text_7 color_1 bg_3" href="#">Download</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection