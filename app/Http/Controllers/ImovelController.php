<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImovelController extends Controller
{
    public function create() {
        return view('imovel');
    }

    public function store(Request $request) {
        $imovel = Imovel::create([
            "localizacao" => $request->localizacao,
            "valor" => $request->valor,
            "numero_quartos" => $request->numero_quartos,
            "piscina" => $request->piscina,
            "user_id"=> Auth::user()->id
        ]);
        return redirect()->route('dashboard');
    }

    public function dashboard() {
        $imoveis = Imovel::where('user_id', Auth::user()->id)->get();
        return view ("dashboard", compact ("imoveis"));
    }
}
