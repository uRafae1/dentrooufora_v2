<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function index()
    {
        return view('cad-candidato');
    }

    public function salvar(Request $request)
    {
        $candidato = new Candidato; 
        $candidato->nome = $request->nome;
        $candidato->foto = $request->foto;
        $candidato->save();

        return redirect()->to('/home');
    }
}
