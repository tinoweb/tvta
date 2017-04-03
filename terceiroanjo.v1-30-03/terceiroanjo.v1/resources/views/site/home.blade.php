@extends('layouts.site')

@section('content')
	<div class="row">
	    <div class="col-md-12">
	        <div class="camera-wrapper">
	            <div id="camera" class="camera-wrap">
	                <div data-src="{{asset('img/index_slide01.jpg')}}">
	                    <div class="fadeIn camera_caption bg_4">
	                        <h2 class="text_3 color_3"><a href="#">Fusce euismod conse</a></h2>

	                        <p class="text_4 color_3">Season 2, Episode 055 (51:37)</p>

	                        <p class="text_5 color_3">
	                            Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer
	                            adipiscing elit. <br/>
	                            Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel
	                            diam. <br/>
	                            Sed in lacus ut enim adipiscing aliquet. <a href="#">Read more &gt;</a>
	                        </p>
	                    </div>
	                </div>
	                <div data-src="{{asset('img/index_slide02.jpg')}}">
	                    <div class="fadeIn camera_caption bg_4">
	                        <h2 class="text_3 color_3"><a href="#">Fusce euismod conse</a></h2>

	                        <p class="text_4 color_3">Season 2, Episode 056 (51:37)</p>

	                        <p class="text_5 color_3">
	                            Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer
	                            adipiscing elit. <br/>
	                            Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel
	                            diam. <br/>
	                            Sed in lacus ut enim adipiscing aliquet. <a href="#">Read more &gt;</a>
	                        </p>
	                    </div>
	                </div>
	                <div data-src="{{asset('img/index_slide03.jpg')}}">
	                    <div class="fadeIn camera_caption bg_4">
	                        <h2 class="text_3 color_3"><a href="#">Fusce euismod conse</a></h2>

	                        <p class="text_4 color_3">Season 2, Episode 057 (51:37)</p>

	                        <p class="text_5 color_3">
	                            Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer
	                            adipiscing elit. <br/>
	                            Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel
	                            diam. <br/>
	                            Sed in lacus ut enim adipiscing aliquet. <a href="#">Read more &gt;</a>
	                        </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div><br><br><br><br>


	<div class="row">
	    <div class="col-md-12 wow fadeInLeft">
	        <h2 class="header_1 text_6 color_1 bg_3">
	            Videos em Destaque
	            <a href="{{ Route('site.videos_all') }}" style="float: right;" rel="tooltip" title="Confira Todos os nossos Vídeos"><!--i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i-->Click aqui e veja todos os Vídeos</a>
	        </h2>
	    </div>
	</div>
	<div class="wrap_1">
	    <div class="row">
			@include('layouts._site._lista-videos')
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
	        <div class="wrap_3">
	            <a class="banner" href="{{ url('/radio') }}" height="139" width="364"><img src="{{asset('/img/index_banner03_Radio2.jpg')}}" alt="Banner 3"/></a>
	        </div>
	    </div>
	    <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
	        <div class="wrap_3">
	            <a class="banner" href="{{ url('/streaming') }}"><img src="{{asset('/img/index_banner03_Stream1.jpg')}}" alt="Banner 3"/></a>
	        </div>
	    </div>
	    <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
	        <div class="wrap_3">
	            <a class="banner" href="#"><img src="{{asset('/img/index_banner03_TV1.jpg')}}" alt="Banner 3"/></a>
	        </div>
	    </div>
	</div>

	<div class="wrap_5">
	    <div class="row">
	        <div class="col-md-8 wow fadeInLeft">
	            <h2 class="header_2 text_6 color_1 bg_3 maxheight">
	            Artigos
	           <a href="{{ Route('site.artigos') }}" style="float: right;" rel="tooltip" title="Confira Todos os nossos Artigos">Click aqui e veja todos os Artigos</a>
	            </h2>
	            @include('layouts._site._lista-artigos')
	        </div>
	        <div class="col-md-4 wow fadeInRight">
	            <h2 class="header_1 text_6 color_1 bg_3 maxheight"><a href="{{ Route('site.categorias_all') }}">Categorias</a></h2>
				<div class="wrap_5">
					<div class="row">
            			@include('layouts._site._lista-categorias')
            		</div>
            	</div>

	            <div class="wrap_5 wow fadeInRight">
	                <a class="banner" href="#"><img src="{{asset('/img/index_banner04.jpg')}}" alt="Banner 4"/></a>
	            </div>

	            <h2 class="header_3 text_6 color_1 bg_3 wow fadeInRight">Adicionado recentemente</h2>

	            <ul class="marked-list wow fadeInRight">
	                <li><a href="#">Vestibulum ante ipsum primis</a></li>
	                <li><a href="#">In faucibus orci luctus et</a></li>
	                <li><a href="#">Ultrices posuere cubilia Curae</a></li>
	                <li><a href="#">Suspendisse sollicitudin velit sed leo</a></li>
	                <li><a href="#">Ultrices posuere cubilia Curae</a></li>
	            </ul>
	        </div>
	    </div>
	</div>
@endsection
