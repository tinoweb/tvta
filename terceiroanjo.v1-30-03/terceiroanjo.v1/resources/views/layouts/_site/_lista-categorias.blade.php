@foreach($categorias as $categoria)
<div class="grid_2 wow fadeInRight">
    <ul class="marked-list">
        <li><a href="#">{{ $categoria->nome }}</a></li>
    </ul>
</div>
@endforeach
