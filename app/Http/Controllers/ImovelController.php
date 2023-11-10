<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImovelController extends Controller
{
    public function create() {
        return view('imovel');
    }

    public function store(Request $request) {
        // $imovel = Imovel::create([
        //     "localizacao" => $request->localizacao,
        //     "valor" => $request->valor,
        //     "numero_quartos" => $request->numero_quartos,
        //     "piscina" => $request->piscina,
        //     "user_id"=> Auth::user()->id
        // ]);
        $imovel = new Imovel();
        $imovel->localizacao = $request->localizacao;
        $imovel->valor = $request->valor;
        $imovel->numero_quartos = $request->numero_quartos;
        $imovel->piscina = $request->piscina;
        $imovel->user_id = Auth::id();
        $imovel->save();

        return redirect()->route('dashboard');
    }

    public function dashboard() {
        $usuario = User::where('id', Auth::id())->first();
        $imoveis = Imovel::where('user_id', Auth::id())->get();
        return view ("dashboard", ["imoveis"=> $imoveis], ["usuario"=>$usuario]);
    }
}
