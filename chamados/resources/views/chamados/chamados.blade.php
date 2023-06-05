@extends('layouts.menu')
@section('title', 'Home')
@section('content')
<div class="main_pags">
    <div class="row" id="content_status">
        <div class="col">
            <div class="card-status" style="background-color: gray; color: white;">
                <p class="content-cards-status">Abertos</p>
            </div>
        </div>
        <div class="col">
            <div class="card-status" style="background-color: rgb(45, 45, 161); color: white;">
                <p class="content-cards-status">Em andamento</p>
            </div>
        </div>
        <div class="col">
            <div class="card-status" style="background-color: rgb(221, 221, 69); color: white;">
                <p class="content-cards-status">Pausados</p>
            </div>
        </div>
        <div class="col">
            <div class="card-status" style="background-color: rgb(223, 43, 43); color: white;">
                <p class="content-cards-status">Fechados</p>
            </div>
        </div>
        <div class="col">
            <div class="card-status" style="background-color: rgb(18, 107, 18); color: white;">
                <p class="content-cards-status">Solucionados</p>
            </div>
        </div>
    </div>

    <div class="cards">
        <div class="row">
            {{-- @foreach($status as $status)
                <div class="col">
                    {{$status->descricao}}
                    <hr>
                </div>
            @endforeach --}}
            @foreach($chamado as $chamado)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$chamado->titulo}}</h5>
                        <p class="card-text">{{$chamado->descricao}}</p>
                        <a href="/chamados/{{$chamado->id}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- @if($busca != '')
    <p>O usuário está buscando por: {{ $busca }}</p>
@endif --}}
@endsection