<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" target="_blanck" href="{{ route('site.home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="{{ Route('admin.principal') }}">Home</a></li>
                    <li><a href="{{ Route('admin.palestrantes') }}">Palestrantes</a></li>
                    <li><a href="{{ Route('admin.videos') }}">Vídeos</a></li> 
                    <li><a href="{{ Route('admin.artigos') }}">Artigos</a></li> 
                    <li><a href="{{ Route('admin.usuarios') }}">Usuários</a></li> 
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categoria<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ Route('admin.categorias') }}">Categorias</a></li>
                            <li><a href="{{ Route('admin.subcategorias') }}">Sub-Categorias</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Páginas<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Rádio</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Palestrantes</a></li>
                            <li><a href="#">Vídeo e Artigo</a></li>
                            <li><a href="#">Doação</a></li>
                            <li><a href="#">Sobre Nós</a></li>
                            <li><a href="#">Galerias</a></li>
                            <li><a href="{{ Route('admin.paginas.teste_paginas') }}">TestePáginas</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!--div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
          <a href="{{ route('site.home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
        </div>
    </nav>
</div-->

