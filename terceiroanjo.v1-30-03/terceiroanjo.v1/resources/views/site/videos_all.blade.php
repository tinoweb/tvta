@extends('layouts.site')

@section('content')
    

    <div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h2 class="header_1 text_6 color_1 bg_3">Videos</h2>
            </div>
        </div>
    </div>

    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
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
                                <strong style="font-weight: bolder;">Palestrante:</strong> 
                                <a href="{{ Route('site.palestrante', [$video->id_palestrante]) }}">{{ $video->palestrante->nome }}
                                </a>
                            </small><br>
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
                                <br>
                            </small>
                            <small class="text_8 color_4">
                                <strong style="font-weight: bolder;">Sub-Categorias:</strong>
                                    @foreach($video->subcategoria as $cat)
                                        @if($video->subcategoria->count() > 1)
                                            {{ $cat->nome }}, 
                                        @else
                                            {{ $cat->nome }} 
                                        @endif
                                    @endforeach
                            </small><br><br>
                            <p class="text_9 color_4">{{ $video->descricao }}
                            </p><br>
                        </div>
                        <!-- compartilhar facebook -->
                        <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" >
                        </div>
                        <!-- compartilhar twitter -->
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $video->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a> 
                        <!--div class="row">
                            <div class="col-md-12">
                                <div class="fb-like" data-href="{{ $video->link_video }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true"></div>
                            </div>
                        </div-->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div align="center">
        <!-- Paginação -->
        {!! $videos->links() !!}
    </div>
@endsection