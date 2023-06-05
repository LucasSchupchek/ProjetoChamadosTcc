@extends('layouts.menu')
@section('title', 'Chamados')
@section('content')
    <div class="main_pags">
        <div class="chamados_users">
            <div class="col-md-10 offset-md-1 titulo-container">
                <h4>Meus Chamados</h4>
            </div>
            <div class="col-md-10 offset-md-1 chamdos-container">
                @if(count($chamados) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Problema</th>
                            <th scope="col">Status</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chamados as $chamados)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td><a href="/chamados/{{$chamados->id}}">{{$chamados->titulo}}</a></td>
                                <td>{{$chamados->descricao}}</td>
                                <td>problema</td>
                                <td>status</td>
                                <td>
                                    <a href="/chamados/edit/{{$chamados->id}}">
                                        <button type="button" class="btn btn-outline-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                            </svg>
                                            <span class="visually-hidden">Editar</span>
                                        </button>
                                    </a>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
                @else
                <p>Você ainda não tem nenhum chamado <a href="/chamados/create">Criar chamado</a></p>
                @endif
            </div>
        </div>
    </div>
@endsection