<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
        protected $model;
    public function index(Request $request)
    {
            

        
        return view('home.index');
    }
    public function cadastroEmpresa()
    {
      //  dd('create');
        
        return view('');
    }
    public function show($id)
    {
        
       // dd($id);
        return view('');
    }
}
