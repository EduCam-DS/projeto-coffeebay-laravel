<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Sempre colocar o model no controller
use App\produtosModel;
use App\sacolaModel;

class produtosController extends Controller
{   
    //
    public function listarProdutos()
    {
        $sacola = sacolamodel::where('user_id','=',Auth::user()->id)->Where('status','=','Aberto')->get();
        $sacolaTotal = $sacola->count('id');
        
        $produtos = produtosModel::all();   
        $title = "Coffee Bay - Produtos";

        return view('produtos', [
            'title' => $title,
            'produtos' => $produtos,
            'sacolaTotal' => $sacolaTotal
        ]);
    }

    public function listarProduto($nome,$id)
    {
        $sacola = sacolamodel::where('user_id','=',Auth::user()->id)->Where('status','=','Aberto')->get();
        $sacolaTotal = $sacola->count('id');
        
        $produto = produtosModel::find($id);

        $title = "Coffee Bay - $nome";
        return view('produto',[
            'title' => $title,
            'produto' => $produto,
            'sacolaTotal' => $sacolaTotal
        ]);

    }

}
