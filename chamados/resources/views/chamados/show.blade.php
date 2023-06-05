@extends('layouts.menu')
@section('title', 'Chamado ' . $chamado->id)
@section('content')

<div class="main">
    <form class="row g-12" action="/chamados/update/{{$chamado->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <h1>{{$chamado->id}} - {{$chamado->titulo}}</h1>
            <hr>
            <div class="info-chamado">
                    <div class="col-3" id="selects-chamado-status">
                    <h3 id="status-h3">Status</h3>
                        <select type="text" class="form-select" id="status" name="status">
                          <option selected value="1">aberto</option>
                          <option value="2">andamento</option>
                          <option value="3">impedido</option>
                          <option value="4">fechado</option>
                        </select>
                </div>
                <div class="selects-chamado">
                    <h4>Problema relatado</h4>
                    <div class="col-3">
                        <select type="text" class="form-select" id="problema" name="problema">
                            <option selected value="{{$problema->id}}">{{$problema->descricao}}</option>
                        </select>
                    </div>
                </div>
                <div class="selects-chamado">
                    <h4>Prioridade</h4>
                    <div class="col-3">
                        <select type="text" class="form-select" id="prioridade" name="prioridade">
                          <option selected value="{{$prioridade->id}}">{{$prioridade->descricao}}</option>
                          @foreach ($prioridades as $prioridades)
                            <option value="{{$prioridades->id}}">{{$prioridades->descricao}}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <h4>Descrição</h4>
                <textarea class="form-control" aria-label="With textarea" id="descricao-chamado" name="descricao">{{$chamado->descricao}}</textarea>
                <div id="user-chamado">
                    <img class="icon-user" src="{{$ownerChamado['profile_photo_url']}}">
                    <hr>
                    <div id="atributos-user">
                        <h3>{{$ownerChamado['name']}}</h3>
                        <p>Função: Empacotador</p>
                        <p>Setor: Almoxarifado</p>
                    </div>
                </div>
            </div>
            <div class="comentarios-chamado">
                <h4>Comentários</h4>
                <hr>
                <div id="conteudo_comentario">
                    {{-- <img class="icon-user-comentario" src="/imgs/icons/icon.jpg"/>
                    <p class="data-comentario">13/02/2023 01:36</p>
                    <P class="texto-comentario">
                    Comentário teste no chamado testando comentário teste teste teste.
                    </P> --}}
                </div>
                <label for="comentario" class="form-label">Adicionar Comentário</label>
                <div class="input-group mb-3 caixa-texto-comentario">
                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{$chamado->id}}" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <input type="text" class="form-control" id="comentario" name="comentario" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="btn-comentario">Enviar</button>
                </div>
            </div>
            {{-- <div class="content-horarios-chamado">
                <h4>Horas trabalhadas</h4>
                <hr>
                <div class="horarios-chamados" align="center" width="300" height="100">
                    <table class="table-horarios">
                        <tr align="center">
                            <th>Dia</th>
                            <th>Inicio</th>
                            <th>Fim</th>
                            <th>Total</th>
                        </tr>
                    <table>
                <div>
            </div> --}}
      </form>
</div><script type="text/javascript" src="/js/helpers.js"></script>
@endsection