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
        $automovel = Automovel::create([
            "modelo" => $request->modelo,
            "ano" => $request->ano,
            "fabricante" => $request->fabricante,
            "quilometragem" => $request->quilometragem,
            "user_id" => Auth::user()->id
        ]);

        return redirect()->route('dashboard');
    }
}
