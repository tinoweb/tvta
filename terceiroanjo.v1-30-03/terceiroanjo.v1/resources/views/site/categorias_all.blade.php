@extends('layouts.site')

@section('content')
    <div class="wrap_6">
        <div class="row">
            <div class="grid_12 wow fadeInLeft">
                <h2 class="header_3 text_6 color_1 bg_3">Categorias</h2>
            </div>
        </div>
    </div>
    <div class="wrap_2">
        <div class="row">
        	@foreach($categorias as $categoria)
            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".2s">
                <div class="box_2">
                    <div class="caption">
                        <a href="{{ Route('site.categoria', [$categoria->id]) }}">
                        	<div class="fa fa-book"></div>
                        	<h3 class="text_7 color_3">{{ $categoria->nome }}</h3>
                        </a>
                        <!--p class="text_8 color_4">Proin dictum element velit. Fusce euism consequat ante. Lorem
                            ipsum dolor sit amet consectet adipiscing elit. Pellen.</p>

                        <a href="#" class="btn_1 text_7 color_1 bg_3">More</a--><br><br>		                    
                    </div>
                </div>
            </div>
        	@endforeach
        </div>
    </div>
    <div align="center">
        <!-- Paginação -->
        {!! $categorias->links() !!}
    </div>
@endsection