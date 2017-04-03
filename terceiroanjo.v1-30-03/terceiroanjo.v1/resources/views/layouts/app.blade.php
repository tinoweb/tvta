<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"><!-- CSRF Token -->
    <link rel="icon" href="/img/logos/Globo grande.png" type="image/x-icon">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
    <!--script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script-->
</head>
<body>
    <div class="" id="app">
        @include('layouts._admin._navbar')
        <div class="container">
            <div class="row">
                @if (Auth::guest())
                    @yield('content')
                @else
                    <div class="col-md-12">
                        @include('layouts._includes._flash-message') 
                        <div class="panel panel-primary">
                            @yield('content')
                        </div>
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-md-12">
                    @yield('panels')
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
