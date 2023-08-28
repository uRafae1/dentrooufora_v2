<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatoVotacaoController extends Controller
{
    public function salvar(Request $request)
    {
        $categoriaCandidato = new CategoriaCandidato; 
        $categoriaCandidato->candidato_id = $request->candidato_id;
        $categoriaCandidato->categoria_id = $request->categoria_id;
        $categoriaCandidato->save();
            
        return redirect()->to('/home');
    }
}
