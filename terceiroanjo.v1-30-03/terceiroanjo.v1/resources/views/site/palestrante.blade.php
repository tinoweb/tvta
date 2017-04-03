@extends('layouts.site')
@section('content')
	<div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h2 class="header_1 text_6 color_1 bg_3">{{ $palestrante->nome }}</h2>
            </div>
        </div>
    </div>
    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".6s">
                            <div class="put-left"><img src="{{asset($palestrante->imagem)}}" alt="Images 2"/></div>
                            <div class="caption_3">
                                <h3 class="text_7 color_3">
                                    @if(isset($palestrante->profissao))
                                    <strong style="font-weight: bolder;">Profissão:</strong>
                                        {{$palestrante->profissao}}
                                    @else
                                        <strong style="font-weight: bolder;">Profissão: </strong>
                                        Não informado..
                                    @endif
                                </h3>
                                <p class="text_9 color_3">
                                    {{$palestrante->descricao}}
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap_6">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">
                    <h2 class="header_1 text_6 color_1 bg_3">Vídeos</h2>
                </div>
            </div>
        </div>
        <div class="wrap_1">
            <div class="row">
                {{--@if(isset($videos->palestrante))--}}
                    @foreach($videos as $video)
                    <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                        <div class="box_1">
                            <a data-type="video" href="{{ Route('site.video', [$video->id]) }}">    
                                <img src="{{asset($video->imagem)}}" alt="Image 1"/>
                            </a>
                            <div class="caption">   
                                <h5 class="text_7 color_3">
                                    <a href="{{ Route('site.video', [$video->id]) }}">
                                    {{ $video->nome }}</a>
                                </h5>
                                <small class="text_8 color_4">
                                    <strong style="font-weight: bolder;">Categorias:</strong>
                                    @foreach($video->categoria as $cat)
                                        @if($video->categoria->count() > 1)
                                            <a href="{{ Route('site.categoria', [$cat->id]) }}"> 
                                                {{ $cat->nome }}, 
                                            </a>
                                        @else
                                            <a href="{{ Route('site.categoria', [$cat->id]) }}"> 
                                                {{ $cat->nome }} 
                                            </a>
                                        @endif
                                    @endforeach
                                </small><br>
                                <small class="text_8 color_4">
                                    <strong style="font-weight: bolder;">Sub-Categorias:</strong>
                                    @foreach($video->subcategoria as $cat)
                                        @if($video->subcategoria->count() > 1)
                                            {{ $cat->nome }}, 
                                        @else
                                            {{ $cat->nome }} 
                                        @endif
                                    @endforeach
                                </small><br>
                                <p class="text_9 color_3">{{ str_limit($video->descricao, 70) }} <a href="{{ Route('site.video', [$video->id]) }}"><strong style="font-weight: bold;">Ver mais</strong></a>
                                </p>

                                <div class="fb-like" data-href="{{ $video->link_video }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false" >Curtir</div>
                                <!-- compartilhar facebook -->
                                <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" >Compartilhar</div><br><br>
                                <!-- compartilhar twitter -->
                                <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $video->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                {{--@else
                    <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                        <div class="box_1">
                            <p>Não há vídeos desse Palestrante</p>
                        </div>
                    </div>
                @endif--}}
            </div>
        </div>
    </div>
    <div align="center">
        {!! $videos->links() !!}
    </div>
@endsection