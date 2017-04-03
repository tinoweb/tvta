@foreach($videos as $video)
<div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
    <div class="box_1"><a data-type="video" href="{{ $video->link_video }}"><img
            src="{{asset($video->imagem)}}" alt="Image 1"/></a>
        <div class="caption">
            <h3 class="text_7 color_3">
                <a href="{{ Route('site.video', [$video->id]) }}">{{ $video->nome }}</a>
                <small class="text_8 color_4">
                    (<a href="{{ Route('site.palestrante', [$video->id_palestrante]) }}">
                        {{ $video->palestrante->nome }}
                    </a>)
                </small>
            </h3>
            <!--small class="text_8 color_4">
                <strong style="font-weight: bolder;">Categorias: </strong><a href=""> 
                {{-- $video->categoria->nome }}</a><br>
                <strong style="font-weight: bolder;">Sub-Categorias: </strong><a href=""> {{-- $video->subcategoria->nome --}}</a>
            </small-->
            <p class="text_9 color_4">{{ str_limit($video->descricao, 70) }} <a href="{{ Route('site.video', [$video->id]) }}"><strong style="font-weight: bold;">Ver mais</strong></a></p>
            
            <!-- curtir facebook -->
            <div class="fb-like" data-href="{{ $video->link_video }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false" >Curtir</div>
            <!-- compartilhar facebook -->
            <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" >Compartilhar</div><br><br>
            <!-- compartilhar twitter -->
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $video->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a><br><br>

            <!--a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.video', [$video->id]) }}">Veja a descrição deste Vídeo</a-->

        </div>
    </div>
</div>
@endforeach

