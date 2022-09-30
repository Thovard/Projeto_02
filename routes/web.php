<?php

use Illuminate\Support\Facades\Route;

route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/', function () {
    return view('welcome');
});
