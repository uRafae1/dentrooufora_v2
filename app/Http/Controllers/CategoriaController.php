<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('cad-categoria');
    }

    public function salvar(Request $request)
    {
        $categoria = new Categoria; 
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect()->to('/home');
    }
}
