@extends('layouts.menu')
@section('title', 'Criar chamado')
@section('content')

<div class="main">
    <h1>Novo Chamado</h1>
    <hr>
    <form class="row g-12" action="/chamados" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
          <label for="titulo" class="form-label">Titulo</label>
          <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="col-6">
          <label for="prioridade" class="form-label">Prioridade</label>
          <select type="text" class="form-select" id="prioridade" name="prioridade">
            @foreach ($prioridades as $prioridades)
              <option value="{{$prioridades->id}}">{{$prioridades->descricao}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-6">
            <label for="problema" class="form-label">Poblema</label>
            <select type="text" class="form-select" id="problema" name="problema">
              @foreach ($problemas as $problemas)
              <option value="{{$problemas->id}}">{{$problemas->descricao}}</option>
              @endforeach
              {{-- <option selected value="1">Sem internet</option>
              <option value="2">Não imprime</option>
              <option value="3">Computador Lento</option>
              <option value="4">Virus</option> --}}
            </select>
          </div>
          <label for="descricao" class="form-label">Descrição</label>
          <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" id="descricao" name="descricao"></textarea>
          </div>
          <label for="anexo" class="form-label">Anexo</label>
          <div class="input-group mb-3">
            <input type="file" class="form-control" id="anexo" name="anexo">
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
</div>

@endsection
