@extends('layouts.site')
@section('content')
	<div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h2 class="header_1 text_6 color_1 bg_3">
                    {{ $videos->nome }}  / 
                    <a href="{{ Route('site.palestrante', [$videos->id_palestrante]) }}">
                        {{ $videos->palestrante->nome }}
                    </a>
                </h2>
            </div>
        </div>
    </div>
    <div class="video-bg">
        <div class="row">
            <div class="col-md-12">
                <div id="video-container" class="embed-responsive embed-responsive-16by9">
                    <!--iframe width="560" height="315" src="https://www.youtube.com/embed/lH8zdCqiVzc?feature=oembed&amp;autoplay=1" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe-->
                    <iframe width="560" height="315" src="{{ $videos->link_video}}" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div><br>
    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".6s">
                            <div class="caption_3">
                                <h1 class="text_7 color_3">
                                    <strong style="font-weight: bolder;">Palestrante:</strong>
                                    <a href="{{ Route('site.palestrante', [$videos->id_palestrante]) }}">
                                        {{ $videos->palestrante->nome }}
                                    </a>
                                </h1>
                                <small class="text_8 color_4">
                                    <strong style="font-weight: bolder;">Categorias:</strong>
                                    @foreach($videos->categoria as $cat)
                                        @if($videos->categoria->count() > 1)
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
                                    @foreach($videos->subcategoria as $cat)
                                        @if($videos->subcategoria->count() > 1)
                                            {{ $cat->nome }}, 
                                        @else
                                            {{ $cat->nome }}
                                        @endif
                                    @endforeach
                                </small><br><br>
                                <p class="text_9 color_3">
                                    {{ $videos->descricao }}
                                </p>
                            </div>

                            <div class="clearfix"></div>
                        </div><br>
                        <!-- compartilhar twitter -->
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $videos->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a>
                        <!-- compartilhar facebook -->
                        <div class="fb-share-button" data-href="{{ $videos->link_video }}" data-layout="button_count" >Compartilhar</div>
                        <!-- curtir facebook -->
                        <div class="fb-like" data-href="{{ $videos->link_video }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" >Curtir</div><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection