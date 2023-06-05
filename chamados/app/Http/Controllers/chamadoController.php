<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chamado;
use App\Models\status;
use App\Models\User;
use App\Models\problema;
use App\Models\prioridade;

class chamadoController extends Controller
{
    public function listChamados (){
        $chamado = chamado::all();
        $status = status::all();
        return view('chamados.chamados',['chamado'=>$chamado, 'status'=>$status]);
    }

    public function create(){
        $problemas = problema::all();
        $prioridades = prioridade::all();

        return view('chamados.create', ['problemas'=>$problemas, 'prioridades'=>$prioridades]);
    }

    // public function index(request $request){
    //     return view('chamados');
    // }

    public function store(request $request){
        $dadosChamado = new chamado;
        $dadosChamado->titulo = $request->titulo;
        $dadosChamado->id_prioridade = $request->prioridade;
        $dadosChamado->id_problema = $request->problema;
        $dadosChamado->descricao = $request->descricao;
        $dadosChamado->id_status = 1;

        if($request->hasFile('anexo') && $request->file('anexo')->isValid()){
            $requestAnexo = $request->anexo;
            $extension = $requestAnexo->extension();

            $nomeAnexo = md5($requestAnexo->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->anexo->move(public_path('imgs/chamados'), $nomeAnexo);
            $dadosChamado->anexo = $nomeAnexo;
        }

        $user = auth()->user();
        $dadosChamado->user_id = $user->id;

        $dadosChamado->save();

        return redirect('/');
    }

    public function show($id){
        $chamado = chamado::findOrFail($id);
        $ownerChamado = User::where('id', $chamado->user_id)->first()->toArray();
        $problemaChamado = problema::where('id', $chamado->id_problema)->first();
        $prioridadeChamado = prioridade::where('id', $chamado->id_prioridade)->first();

        $prioridades = $prioridades = prioridade::where('id', '!=', $chamado->id_problema)->orWhereNull('id')
        ->get();
        
        return view('chamados.show', [
            'chamado' => $chamado,
            'ownerChamado' => $ownerChamado,
            'problema' => $problemaChamado,
            'prioridade' => $prioridadeChamado,
            'prioridades' => $prioridades
        ]);
    }

    public function usersChamados(){
        $user = auth()->user();
        $chamados = $user->chamados;
        //$chamados = chamado::where('user_id' => $chamado->user_id);

        return view('chamados.dashboard', ['chamados' => $chamados]);
    }

    public function edit($id){
        $chamado = chamado::findOrFail($id);
        $ownerChamado = User::where('id', $chamado->user_id)->first()->toArray();
        $problemaChamado = problema::where('id', $chamado->id_problema)->first();
        $prioridadeChamado = prioridade::where('id', $chamado->id_prioridade)->first();

        $prioridades = $prioridades = prioridade::where('id', '!=', $chamado->id_problema);

        return view('chamados.edit', [
            'chamado' => $chamado,
            'ownerChamado' => $ownerChamado,
            'problema' => $problemaChamado,
            'prioridade' => $prioridadeChamado,
            'prioridades' => $prioridades
        ]);
    }
}
