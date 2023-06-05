@extends('layouts.menu')
@section('title', 'Chamados')
@section('content')
    <div class="main_pags">
        <div class="chamados_users">
            <div class="col-md-10 offset-md-1 titulo-container">
                <h4>Meus Chamados</h4>
            </div>
            <div class="col-md-10 offset-md-1 chamados-container">
                @if(count($chamados) > 0)
                @else
                <p>Você ainda não tem nenhum chamado <a href="/chamados/create">Criar chamado</a></p>
                @endif
            </div>
        </div>
    </div>
@endsection