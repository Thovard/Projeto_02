<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//rotas para -> home: empresa / funcionario / produto.
route::get('/home', [HomeController::class, 'index'])->name('home.index');                          //<-- home home
route::get('/home/empresa/{id}', [EmpresaController::class, 'index'])->name('empresa.index');       //<-- home empresa
route::get('/home/empresa/{id}', [EmpresaController::class, 'index'])->name('vendedor.index');      //<-- home vendedor

//rotas para -> editar: empresa / vendedor / produto.
route::get('/home/Empresa/{id}/EditEmpresa',[EmpresaController::class, 'edit'])->name('');      //<--- editar empresa
route::put('/home/{id}', [EmpresaController::class, 'update'])->name('');

route::get('/home/{vendedor}/EditEmpresa,{id}',[EmpresaController::class, 'edit'])->name('');   //<-- editar empregado
route::put('/home/{id}', [EmpresaController::class, 'update'])->name('');

route::get('/home/{prodtos}/EditEmpresa',[EmpresaController::class, 'edit'])->name('');         //<-- editar produto
route::put('/home/{id}', [EmpresaController::class, 'update'])->name('');

//rotas para -> cadastrar: empresa / vendedor / produto.
route::get('/home/cadastroEmpresa', [HomeController::class, 'create'])->name('home.cadastro');     //<-- cadastro de empresa
Route::post('/home', [UserController::class, 'store'])->name('home.store');

route::get('/home/cadastroEmpresa', [HomeController::class, 'create'])->name('home.cadastro');     //<-- cadastro de vendedor
Route::post('/home', [UserController::class, 'store'])->name('home.store');

route::get('/home/cadastroEmpresa', [HomeController::class, 'create'])->name('home.cadastro');     //<-- cadastro de produto
Route::post('/home', [UserController::class, 'store'])->name('home.store');



Route::get('/home/{id}', [HomeController::class, 'show'])->name('home.show');


Route::get('/', function () {
    return view('welcome');
});
