@extends('layouts.site')

@section('content')
	<div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h2 class="header_3 text_6 color_1 bg_3">Participe</h2>
            </div>
        </div>
    </div>
    <div class="wrap_2">
    	<div class="caption_2">
            <h2 class="text_6 color_3">
                Você pode apoiar este ministério de várias formas:
            </h2>
        </div><br><br>
        <div class="row">
            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".2s">
                <div class="box_2">
                    <div class="caption">
                        <img src="img/icons/oracao1.png" height="128" width="128" alt="">
                        <h3 class="text_7 color_3"><a href="#">Orações</a></h3>
                        <p class="text_8 color_4" style="text-align: justify;">Proin dictum element velit. Fusce euism consequat ante. Lorem
                            ipsum dolor sit amet consectet adipiscing elit. Pellen.
                            Proin dictum element velit. Fusce euism consequat ante. Lorem
                            ipsum dolor sit amet consectet adipiscing elit. Pellen.
                            Proin dictum element velit. Fusce euism consequat ante. Lorem
                            ipsum dolor sit amet consectet adipiscing elit. Pellen.</p>
                        <a href="#" class="btn_1 text_7 color_1 bg_3">Ver Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".4s">
                <div class="box_2">
                    <div class="caption">
                        <img src="img/icons/trabalho.png" alt="">
                        <h3 class="text_7 color_3"><a href="#">Empenho Pessoal</a></h3>
                        <p class="text_8 color_4" style="text-align: justify;">
                        <a href="/download"><strong style="color:#f51919;">Baixe o formulário</strong></a>, preencha e envie-nos de volta para: 
                        contato@terceiroanjo.com
						A candidatura pode ser feita para trabalho presencial ou à distância. O voluntário à distância poderá exercer as seguintes tarefas:

						Traduções (inglês, espanhol), produção de Prezis, edição de áudio, e similares.
						Precisamos de um desenvolvedor de App Android;</p>
                        <a href="#" class="btn_1 text_7 color_1 bg_3">Baixar Formulário</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".6s">
                <div class="box_2">
                    <div class="caption">
                        <img src="img/icons/divulgar.png" alt="">
                        <h3 class="text_7 color_3"><a href="#">Divulgação</a></h3>
                        <p class="text_8 color_4" style="text-align: justify;">
						Curta os vídeos que assiste nas redes sociais. Indique-nos a seus amigos. Também poste links e banners em seu site ou blog. Obtenha aqui os códigos.
                        </p>

                        <a href="https://www.facebook.com/terceiroanjobrasil/" class="btn_1 text_7 color_1"><img src="img/icons/facebook.png" height="30" width="30" alt=""></a>
                        <a href="https://www.youtube.com/user/TerceiroAnjoBrasil/" class="btn_1 text_7 color_1"><img src="img/icons/youtube.png" height="30" width="30" alt=""></a>
                        <a href="https://vimeo.com/tvterceiroanjo/" class="btn_1 text_7 color_1"><img src="img/icons/vimeo.png" height="30" width="30" alt=""></a><br><br>
                        
                        <a href="{{ Route('quero_divulgar') }}" class="btn_1 text_7 color_1 bg_3">Ver códigos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".8s">
                <div class="box_2">
                    <div class="caption">
                        <img src="img/icons/doacao1.png" alt=""><br><br>
                        <h3 class="text_7 color_3"><a href="#">Doações</a></h3>
                        <p class="text_8 color_4" style="text-align: justify;">Terceiro Anjo não faz propaganda comercial e oferece tudo gratuitamente. Porém, subsistimos através das doações dos irmãos. Temos vários projetos e necessitamos de patrocínios externos. Agradecemos por considerar ajudar com doações.</p>
                        <a href="{{ Route('quero_doar') }}" class="btn_1 text_7 color_1 bg_3">Fazer Doações</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection