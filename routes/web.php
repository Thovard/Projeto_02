<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

route::get('/home', [HomeController::class, 'index'])->name('home.index');
route::get('/home/cadastroEmpresa', [HomeController::class, 'create'])->name('home.cadastroEmpresa');
Route::get('/home/{id}', [HomeController::class, 'show'])->name('home.create');


Route::get('/', function () {
    return view('welcome');
});
