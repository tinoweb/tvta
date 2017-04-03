@extends('layouts.site')

@section('content')
    <div class="wrap_6 wrap_1">
        <div class="row">
            <div class="col-md-6">
                <h2 class="header_6 text_6 color_1 bg_3">Postal Address</h2>
                @if(isset($pagina->mapa))
                    <div class="video-container">
                        {!! $pagina->mapa !!}
                    </div>
                @else
                    <img class="responsive-img" src="{{ asset($pagina->imagem) }}"><br>
                @endif
                <br>
                <address class="text_10 color_3">
                    <p class="text_7">
                        Alameda Sapucaia 321 – Residencial Lagoa Bonita
                        13165-000 <br> Engenheiro Coelho – SP – Brasil
                    </p>
                    <dl>
                        <dt>Fixo:</dt>
                        <dd>+55 (19) 3858 1082</dd><br>
                        <dt></dt>
                        <dd>+55 (19) 3858 1407</dd>
                    </dl>
                    <dl>
                        <dt>Celular:</dt>
                        <dd>+55 (19) 982 053 950</dd>
                    </dl>

                    <p class="text_10">E-mail: <a href="#">contato@terceiroanjo.com/a></p>
                </address>
            </div>

            <div class="col-md-6">
                <h2 class="header_6 text_6 color_1 bg_3">{{ $pagina->titulo }}</h2>
                <form id="contact-form" action="{{ Route('site.contatos.enviar') }}" method="post">
                    {{ csrf_field() }}
                    <div class="contact-form-loader"></div>
                    <fieldset>
                        <label class="name">
                            <input type="text" name="nome" placeholder="Nome:" value=""
                                   data-constraints="@Required @JustLetters"/>
                        </label>

                        <label class="email">
                            <input type="text" name="email" placeholder="Email:" value=""
                                   data-constraints="@Required @Email"/>
                        </label>

                        <!--label class="phone">
                            <input type="text" name="phone" placeholder="Phone:" value=""
                                   data-constraints="@JustNumbers"/>
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid phone.</span>
                        </label-->

                        <label class="message">
                            <textarea name="mensagem" placeholder="Mensagem:"
                                      data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                        </label>

                        <div class="btn-wrapper">
                            <!--a class="btn_1 bg_3 text_7 color_1" href="#" data-type="reset">Limpar</a>
                            <a class="btn_1 bg_3 text_7 color_1" >Enviar</a>
                            <button class="btn_1 bg_3 text_7 color_1">Enviar</button-->
                            <button class="btn_1 bg_3 text_7 color_1">Enviar</button>
                        </div>
                    </fieldset>
                    <!--div class="modal fade response-message">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Sua mensagem foi enviada! Nós entraremos em contato em breve.
                                </div>
                            </div>
                        </div>
                    </div-->
                </form>
            </div>
        </div>
    </div>
@endsection