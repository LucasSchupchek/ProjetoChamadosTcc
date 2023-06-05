<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\setores;

class usuariosController extends Controller
{
    public function listUsuarios(){
        $usuario = User::all();
        return view('usuarios.usuarios',['usuario'=>$usuario]);
    }

    public function create(){
        $setores = setores::all();

        return view('usuarios.create', ['setores'=>$setores]);
    }
}
