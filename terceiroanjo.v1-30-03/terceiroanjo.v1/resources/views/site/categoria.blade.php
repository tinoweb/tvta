@extends('layouts.site')
@section('content')
    <div class="wrap_6">
        <div class="row">
                <h2 class="header_1 text_6 color_1 bg_3">{{ $cats->nome }}</h2>
        </div>
    </div>
    <div class="wrap_1">
        <div class="row">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#tab1" data-toggle="tab">Todos</a></li>
                @foreach($subcategorias as $subcategoria)
                    <li role="presentation">    
                        <a data-toggle="tab" href="#{{ $subcategoria->nome }}">
                            {{ $subcategoria->nome }}
                        </a>
                    </li>
                @endforeach
            </ul><br>

            <div class="tab-content">
                <div class="tab-pane active" id="#{{ $subcategoria->nome }}">
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
                                        <strong style="font-weight: bolder;">Sub-Categorias:</strong>
                                        @foreach($video->subcategoria as $cat)
                                            @if($video->subcategoria->count() > 1)
                                                {{ $cat->nome }}, 
                                            @else
                                                {{ $cat->nome }} 
                                            @endif
                                        @endforeach
                                    </small><br>
                                    <p class="text_9 color_3">{{ str_limit($video->descricao, 70) }}
                                    <a href="{{ Route('site.video', [$video->id]) }}"><strong style="font-weight: bold;">Ver mais</strong></a></p>
                                    </p>
                                    
                                    <!-- curtir facebook -->
                                    <div class="fb-like" data-href="{{ $video->link_video }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false" >Curtir</div>
                                    <!-- compartilhar facebook -->
                                    <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" >Compartilhar</div><br><br>
                                    <!-- compartilhar twitter -->
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $video->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div align="center">
        {!! $videos->links() !!}
    </div>
@endsection

