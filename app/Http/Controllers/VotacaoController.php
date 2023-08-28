<?php

namespace App\Http\Controllers;

use App\Models\Votacao;
use App\Models\Candidato;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;

class VotacaoController extends Controller
{
    public function index($hash)
    {
        $votacao = Votacao::where('codigo', $hash)->firstOrFail();
        $candidatos = DB::table('votacao')
                        ->join('categoria', 'votacao.categoria_id', '=', 'categoria.id')
                        ->join('categoria_candidato', 'categoria.id', '=', 'categoria_candidato.categoria_id')
                        ->join('candidato', 'categoria_candidato.candidato_id', '=', 'candidato.id')
                        ->select('candidato.*')
                        ->inRandomOrder()->limit(2)->get();

        return view('votacao', [
            'votacao' => $votacao,
            'candidatos' => $candidatos,
        ]);
    }

    public function lista() {

        $votacoes = Votacao::get();

        return view('lista-votacoes', [
            'votacoes' => $votacoes,
        ]);
    }

    public function criar()
    {
        return view('cad-votacao', [
            'categorias' => DB::table('categoria')->get()
        ]);
    }

    public function salvar(Request $request)
    {

        $candidatos = DB::table('votacao')
                        ->join('categoria', 'votacao.categoria_id', '=', 'categoria.id')
                        ->join('categoria_candidato', 'categoria.id', '=', 'categoria_candidato.categoria_id')
                        ->join('candidato', 'categoria_candidato.candidato_id', '=', 'candidato.id')
                        ->select('candidato.*')
                        ->get();

        if ($candidatos == null){
            return redirect()->to('/home');
        } else {
            $votacao = new Votacao;
            $votacao->titulo = $request->titulo;
            $votacao->codigo = substr(Hash::make(random_int(1, 10) * random_int(1, 10)), 0, 8);
            $votacao->categoria_id = $request->categoria_id;
            $votacao->descricao = $request->descricao;
            $votacao->datahora_inicio = today();
            $votacao->publica = $request->publica;
            $votacao->usuario_id = Auth::user()->id;
            $votacao->save();

            foreach ($candidatos as $candidato) {
                $candidatoVotacao->candidato_id = $candidato->id;
                $candidatoVotacao->votacao_id = $votacao->id;
                $candidatoVotacao->pontos = 0;
                $candidatoVotacao->save();
            }
            return redirect()->to('/home');
        }
                    
        
    }
}
