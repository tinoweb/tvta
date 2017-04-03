@foreach($artigos as $artigo)
<div class="wrap_4">
    <div class="box_1 wow fadeInLeft">
        <div class="put-left"><a href="{{ Route('site.artigo', [$artigo->id]) }}"><img src="{{asset($artigo->imagem)}}" alt="img 9"/></a></div>
        <div class="caption_1">
            <h3 class="text_7 color_3"><a href="{{ Route('site.artigo', [$artigo->id]) }}">{{ $artigo->nome }}</a></h3>

            <p class="text_8 color_4">{{ date('d/m/Y', strtotime($artigo->data)) }} </p>

            <p class="text_9 color_3">{{ str_limit($artigo->conteudo, 300)  }} </p>

            <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.artigo', [$artigo->id]) }}">Ler Artigo</a>
            <a class="btn_1 text_7 color_1 bg_3" href="#">Download</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endforeach
