<?php

namespace App\Http\Controllers;

use App\Models\Automovel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutomovelController extends Controller
{
    public function create() {
        return view('automovel');
    }

    public function store(Request $request) {
        // $automovel = Automovel::create([
        //     "modelo" => $request->modelo,
        //     "ano" => $request->ano,
        //     "fabricante" => $request->fabricante,
        //     "quilometragem" => $request->quilometragem,
        //     "user_id" => Auth::user()->id
        // ]);
        $automovel = new Automovel();
        $automovel->modelo = $request->modelo;
        $automovel->ano = $request->ano;
        $automovel->fabricante = $request->fabricante;
        $automovel->quilometragem = $request->quilometragem;
        $automovel->user_id = Auth::id();
        $automovel->save();

        return redirect()->route('dashboard');
    }
}
