<div class="col-md-4">
    <div class="row">
            @if(isset($videos->imagem))
                <img width="350" src="{{ asset($videos->imagem) }}"><br>
            @endif
    </div><br>
    <div class="row">
        <input type="file" name="imagem">
    </div>
</div>
<div class="col-md-8">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{ isset($videos->nome) ? $videos->nome : '' }}" class="form-control" placeholder="Nome do Video">
    </div>
    <!--div class="form-group">
        <label for="categoria">Categorias</label>
        <select class="form-control" name="id_categoria" id="id_categoria">
            <option>Selecione...</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{(isset($videos->id_categoria) && $videos->id_categoria == $categoria->id  ? 'selected' : '')}}> 
                    {{ $categoria->nome }} 
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="id_subcategoria">Sub-Categorias </label><br>
        <select multiple class="form-control" name="id_subcategoria[]"  id="id_subcategoria">
            <option>Selecione...</option>
            @foreach($subcategorias as $subcategoria)
                <option value="{{ $subcategoria->id }}" {{(isset($videos->id_subcategoria) && $videos->id_subcategoria == $subcategoria->id  ? 'selected' : '')}}> 
                    {{ $subcategoria->nome }} 
                </option>
            @endforeach
        </select>
    </div-->

    <div class="form-group">
        <label for="palestrante">Palestrantes</label>
        <select class="form-control" name="id_palestrante">
            @foreach($palestrantes as $palestrante)
            <option value="{{ $palestrante->id }}" {{(isset($videos->id_palestrante) && $videos->id_palestrante == $palestrante->id  ? 'selected' : '')}}> 
                {{ $palestrante->nome }} 
            </option>
        @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" rows="5" name="descricao" id="" placeholder="Descrição do Video">
            {{ isset($videos->descricao) ? $videos->descricao : '' }}
        </textarea>
    </div>
    <div class="form-group">
        <label for="descricao">Link </label>
        <!--small> (coloque '?feature=oembed&amp;autoplay=1', após o link do vídeo)</small-->
        <a data-toggle="modal" data-target=".bs-example-modal-lg" style="color:#222" href=""><i style="" class="fa fa-question-circle" aria-hidden="true"></i></a>
        <input type="text" name="link_video" value="{{ isset($videos->link_video) ? $videos->link_video : '' }}" class="form-control" placeholder="https://www.youtube.com/embed/lH8zdCqiVzc?feature=oembed&amp;autoplay=1">
    </div>
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><strong>Instruções para o link: </strong></h4>
            </div>
            <div class="modal-body">
                <p>No youtube, escolha o vídeo e selecione a opção "compartilhar".</p>
                <img src="{{ asset('img/video_compartilhar.png')}}" height="164" width="581" alt=""><br><br>
                <p>Vá na opção incorporar e selecione o que está dentro da tag <strong style="    color: #e61c12;"> 'src' </strong> </p>
                <img src="{{ asset('img/video_imcorporar.png')}}" height="138" width="850" alt=""><br>
                <p>Cole no campo link e adicione o código abaixo junto</p>
                <p><strong>?feature=oembed&amp;autoplay=1</strong></p><br>

                <p>O link ficará da seguinte forma:</p>
                <p><strong>https://www.youtube.com/embed/lH8zdCqiVzc?feature=oembed&amp;autoplay=1</strong></p>
            </div>
        </div>
    </div>
</div>