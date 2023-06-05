@extends('layouts.menu')
@section('title', 'Criar chamado')
@section('content')

<div class="main">
    <form wire:submit.prevent="createUser">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" wire:model="name" id="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" wire:model="email" id="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" wire:model="password" id="password">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="role">Nível de Acesso:</label>
            <select class="form-control" wire:model="role" id="role">
                <option value="user">Usuário</option>
                <option value="admin">Administrador</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Criar Usuário</button>
    </form>
</div>

@endsection
