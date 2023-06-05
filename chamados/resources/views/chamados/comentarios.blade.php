@foreach ($comentarios as $comentario)
<div class="comments">
    <img class="icon-user-comentario" src="{{$comentario['owner']['profile_photo_url']}}"/>
    <p class="data-comentario">{{$comentario['comentario']['created_at']}}</p>
    <P class="texto-comentario">
        {{$comentario['comentario']['descricao']}}
    </P>
</div>
@endforeach
