<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\chamadoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\comentarioController;
use App\Http\Controllers\authController;
use App\Http\Livewire\CreateUser;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\RoutePath;

Route::get('/', [Controller:: class, 'index']);
Route::get('/register', function () {return view('auth.register');},)->name('register');
Route::get('/chamados/create', [chamadoController:: class, 'create'])->middleware('auth');
Route::get('/chamados/chamados', [chamadoController:: class, 'listChamados'])->middleware('auth');
Route::get('/chamados/{id}', [chamadoController:: class, 'show'])->middleware('auth');
Route::POST('/chamados', [chamadoController:: class, 'store'])->middleware('auth');
Route::POST('/chamados/comentario', [comentarioController:: class, 'comentarioController'])->middleware('auth');
Route::get('/usuarios/usuarios', [usuariosController:: class, 'listUsuarios'])->middleware('auth');
Route::get('/chamados/edit/{id}', [chamadoController:: class, 'edit'])->middleware('auth');
Route::get('/chamadoComentarios/{id}', [comentarioController:: class, 'show'])->middleware('auth');
Route::get('/usuarios/create', [usuariosController:: class, 'create'])->middleware('auth');
Route::get('/create-user', CreateUser::class, 'render')->middleware('auth');
// Route::POST(RoutePath::for('logout', '/logout'), [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::post('/logout', [authController::class, 'destroy'])->middleware('auth');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', [chamadoController:: class, 'usersChamados'])->middleware('auth');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/chamados',  function () {
//         return view('welcome');
// },)->name('chamados');
// });

Route::redirect('/', '/login');