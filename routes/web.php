<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Js;
use PhpParser\Node\Expr\Empty_;

// Route::get('/', function () {
//     return view('home');
// });

// Mesma coisa que a rota acima
Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);
Route::resource('employers', EmployerController::class);

// A função Route::resource() no Laravel cria automaticamente todas as rotas RESTful para um controller, seguindo o padrão CRUD (Create, Read, Update, Delete).

// Fácil de customizar: Pode usar ->only() ou ->except() para limitar rotas.

// Os nomes dos métodos do controller usados pelo Route::resource() são padrões reconhecidos automaticamente pelo Laravel. Eles são:
// index → listar todos
// create → mostrar formulário de criação
// store → salvar novo registro
// show → mostrar um registro
// edit → mostrar formulário de edição
// update → atualizar registro
// destroy → deletar registro
// Se você nomear os métodos do seu controller exatamente assim, o Laravel faz o mapeamento automaticamente ao usar Route::resource().
