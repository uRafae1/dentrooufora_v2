<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Candidato;
use App\Models\CategoriaCandidato;
use Illuminate\Http\Request;

class CategoriaCandidatoController extends Controller
{
    public function index()
    {

        $categorias = Categoria::get();
        $candidatos = Candidato::get();

        return view('cad-candidato-categoria', [
            'candidatos' => $candidatos,
            'categorias' => $categorias
        ]);
    }

    public function salvar(Request $request)
    {
        $categoriaCandidato = new CategoriaCandidato; 
        $categoriaCandidato->candidato_id = $request->candidato_id;
        $categoriaCandidato->categoria_id = $request->categoria_id;
        $categoriaCandidato->save();
            
        return redirect()->to('/home');
    }
}
