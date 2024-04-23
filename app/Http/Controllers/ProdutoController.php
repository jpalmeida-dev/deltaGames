<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function pagProduto()
    {
        return view('ApresProduto')->with('\ApresProduto' , produto::all());
    }
    public function dev()
    {
        return view('dev')->with('\dev' , produto::all());
    }
    public function cart()
    {
        return view('cart')->with('\cart' , produto::all());
    }
    public function home()
    {
        return view('home')->with('\home' , produto::all());
    }
    public function allProducts()
    {
        return view('allProducts')->with('\Jogos' , produto::all());
    }

    public function login()
    {
        return view('login')->with('\login' , produto::all());
    }
    
}
