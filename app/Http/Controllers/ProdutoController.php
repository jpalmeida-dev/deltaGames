<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Imagem;
use App\Models\Categoria;



class ProdutoController extends Controller
{
    public function home()
    {
        $imagens = imagem::all();
        $produtos = produto::all();
        return view('home', compact('produtos'));   
    }

    public function dev()
    {
        return view('dev')->with('\dev' , produto::all());
    }

    public function cart()
    {
        return view('cart')->with('\cart' , produto::all());
    }

    public function allProducts()
    {
        $imagens = imagem::all();
        $produtos = produto::all();
        return view('allProducts', compact('produtos'));
    }
    
    
    public function login()
    {
        return view('login')->with('\login' , produto::all());
    }

    public function pagProduto()
    {
        return view('ApresProduto')->with('\pagProduto' , Produto::all());
    }
}
