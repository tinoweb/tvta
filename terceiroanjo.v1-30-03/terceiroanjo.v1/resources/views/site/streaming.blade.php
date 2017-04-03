@extends('layouts.site')

@section('content')
    
    <script src="/lib/streaming.js"></script>

    <div class="streaming-container clearfix hidden-xs">
        <div id="video-container" class="streaming">
            <div id="streaming">Iniciando transmissão...</div>
            <div id="video-control" class="video-control text-center">
                <div class="btn-group" data-toggle="buttons">
                    <!--label class="btn btn-xs btn-primary">
                        <input data-qual="low" type="radio" name="options" id="option1" autocomplete="off"> BAIXA
                    </label-->
                    <label class="btn btn-xs btn-primary">
                        <input data-qual="medium" type="radio" name="options" id="option2" autocomplete="off"> MÉDIA
                    </label>
                    <label class="btn btn-xs btn-primary active">
                        <input data-qual="high" type="radio" name="options" id="option3" autocomplete="off" checked> ALTA
                    </label>
                </div>
            </div>
        </div>
    </div><br><br>
@endsection