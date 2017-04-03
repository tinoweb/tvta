<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"><!-- CSRF Token -->
    <title>{{ config('app.name', 'Laravel') }}</title> 

    <!-- Styles -->
    <link rel="icon" href="/img/logos/Globo grande.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/app.css" >
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/camera.css"/>
    <link rel="stylesheet" href="/css/contact-form.css"/>
    <link rel="stylesheet" href="/css/jquery.fancybox.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/lib/screen.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="/lib/jwplayer-7.7.4/jwplayer.js"></script>
    <!--script src="/lib/radio.js"></script>
    <script src="/lib/streaming.js"></script-->
    
    <!--script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="http://terceiroanjo.com/js/jwplayer-7.7.4/jwplayer.js"></script>
    <script src="http://terceiroanjo.com/js/streaming.js"></script>
    <script src="http://terceiroanjo.com/js/radio.js"></script-->
    

    <script src="/js/app.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-migrate-1.2.1.js"></script>
    <script src="/search/search.js"></script>
    <script src="/js/jquery.equalheights.js"></script>
    <script src="/js/camera.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/jquery.fancybox-media.js"></script>
    <script src="/js/jquery.mobile.customized.min.js"></script>
    <script src="/js/wow/wow.js"></script>
    <script>
        $(document).ready(function () {
            if ($('html').hasClass('desktop')) {
                new WOW().init();
            }
        });
    </script>
    <script src="/js/script.js"></script>
    <script src="/js/init.js"></script>  
</head>
<body>
    <div id="app">
        <header id="header">
            @include('layouts._site._navbar')
        </header>

        <div class="page">
            <section id="content" >
                <div class="container"><br>
                    @include('layouts._includes._flash-message')
                    @yield('content')
                </div>
            </section>
        </div>
        
        <!--==========FOOTER========================-->
        <footer id="footer">
            @include('layouts._site._footer')
        </footer>
    </div>

</body>
</html>
