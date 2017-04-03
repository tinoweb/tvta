<header id="header">
    <div class="header_wrap">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="brand">
                                <h1 class="text_1 color_1">
                                    <!--a href="./">Movie Track.</a-->
                                    <a href="./"><img src="img/logos/logo2.png" height="893" width="4058" alt=""></a>
                                </h1>
                            </div>
                        </div>
                        <div class="col-md-8">
                             <a class="banner_1 " href="#">
                                <img class="banner_1" src="/img/index_banner01.jpg" alt="Banner 1"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <nav>
                        <ul class="sf-menu">
                            <!--li class="current"><a href="index-1.php">Home</a></li-->
                            <li ><a href="{{ url('/') }}">Home</a></li>
                            <!--li><a class="fa fa-caret-down" href="{{ url('/radio') }}">Rádio</a>
                                <ul>
                                    <li><a href="{{ Route('radio') }}">Rádio ao Vivo</a></li>
                                    <li><a href="{{ Route('radio_downloads') }}">Downloads</a></li>
                                </ul>
                            </li-->
                            <li><a class="fa fa-caret-down" href="#">Categorias</a>
                                <ul>
                                    <li><a href="{{ Route('site.categorias_all') }}">Todas</a></li>
                                    @if(isset($categorias)) 
                                        @foreach($categorias as $value)
                                            <li><a href="{{ Route('site.categoria', [$value->id]) }}">{{ $value->nome }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li><a class="fa fa-caret-down" href="#">Palestrantes</a>
                                <ul>
                                    <li><a href="{{ Route('site.palestrantes_all') }}">Todos </a></li>
                                    @if(isset($palestrantes)) 
                                        @foreach($palestrantes as $value) 
                                            <li><a href="{{ Route('site.palestrante', [$value->id]) }}">
                                            {{ $value->nome }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li><a class="fa fa-caret-down" href="#">Vídeos</a>
                                <ul>
                                    <li><a href="{{ Route('site.videos_all') }}">Vídeos</a></li>
                                    <li><a href="{{ Route('series') }}">Series</a></li>
                                </ul>
                            </li>
                            <li><a href="http://terceiroanjo.ebiblico.com.br/">Estudos Bíblicos</a>
                            </li>
                            <li><a href="{{ Route('site.artigos') }}">Artigos</a></li>
                            <li><a class="fa fa-caret-down" href="">Doação</a>
                                <ul>
                                    <li><a href="{{ Route('quero_doar') }}">Quero Doar</a></li>
                                    <li><a href="{{ Route('quero_participar') }}">Quero Participar </a></li>
                                    <li><a href="{{ Route('quero_divulgar') }}">Quero Divulgar</a></li>
                                </ul>
                            </li>
                            <li><a class="fa fa-caret-down" href="">Sobre Nós</a>
                                <ul>
                                    <li><a href="{{ url('/nossa_historia') }}">Nossa História</a></li>
                                    <li><a href="{{ url('/contatos') }}">Contatos </a></li>
                                    <li><a href="{{ url('/galerias') }}">Galerias</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <form id="search" action="search/search.php" method="GET" accept-charset="utf-8">
                        <label class="input_wrap" for="in">
                            <input id="in" type="text" name="s" value=" ..." placeholder=""
                                   onblur="if(this.value == '') { this.value='...'}"
                                   onfocus="if (this.value == '...') {this.value=''}"/>
                        </label>
                        <a onclick="document.getElementById('search').submit()">Buscar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
