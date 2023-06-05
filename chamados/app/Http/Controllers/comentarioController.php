<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chamado;
use App\Models\comentario;
use App\Models\User;

class comentarioController extends Controller
{
    public function comentarioController(request $request){        
        $dadosComentario = new comentario;

        $user = auth()->user();
        $dadosComentario->id_usuario = $user->id;
        $dadosComentario->id_chamado = $request->id;
        $dadosComentario->descricao = $request->comentario;

        $dadosComentario->save();

        return response()->json(['message' => 'Comentário adicionado com sucesso']); // Retorne uma resposta JSON
    }

    public function show($id){
        $dados = [];
        $comentarios = comentario::where('id_chamado', $id)->get()->toArray();
        foreach($comentarios as $comentario){
            $ownerComentario = User::where('id', $comentario['id_usuario'])->first();
            $dados[] = [
                'comentario' => $comentario,
                'owner' => $ownerComentario
            ];
        };
        return view('chamados.comentarios',['comentarios'=>$dados]);
    }
}
