<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" id="background-side-bar" style="width: 15%; height: 100%; float:left; position: fixed;">
            <ul id="side-bar">
                <a href="/">
                    <li>
                    <ion-icon name="home-outline"></ion-icon>
                    Meus Chamados
                    </li>
                </a>
                <a href="/chamados/chamados">
                    <li>
                    <ion-icon name="podium-outline"></ion-icon>
                    Chamados
                    </li>
                </a>     
                <a href="/chamados/create">
                    <li>
                    <ion-icon name="bulb-outline"></ion-icon>
                    Criar chamado
                    </li>
                </a> 
                <a href="/usuarios/usuarios">
                    <li>
                    <ion-icon name="person-outline"></ion-icon>
                    Usuários
                    </li>
                </a> 
                <a href="/usuarios/create">
                    <li>
                    <ion-icon name="person-add-outline"></ion-icon>
                    Criar Usuário
                    </li>
                </a>  
            </ul>
            <hr>
            <div class="userProfile">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>{{ Auth::user()->name }}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <form method="POST" action="/logout" x-data>
                        @method('POST')
                        <li><button type="submit" class="dropdown-item">Sair</button></li>
                    </form>
                </ul>
            </div>
        </div>
        @yield('content')
    </body>
</html>
