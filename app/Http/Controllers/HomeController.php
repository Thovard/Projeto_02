<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
        protected $model;
    public function index()
    {
            
        $users = User::get();

       // dd($users);
        
        return view('home.index');
    }
    public function cadastroE()
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
