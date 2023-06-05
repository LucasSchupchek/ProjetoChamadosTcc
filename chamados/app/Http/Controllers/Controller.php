<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        if (Auth::check()) {
            return redirect()->route('chamados.dashboard'); // Redirecionar para o dashboard ou outra página autenticada
        } else {
            return view('auth.login');
        }
    }
}
