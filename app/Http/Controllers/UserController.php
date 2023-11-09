<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function cadastro() {
        return view("cadastro");
    }
    
    public function auth(Request $request) {
        $user = User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> bcrypt($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('cadastro');
    }

    public function login(Request $request) : RedirectResponse {
        $dados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($dados)) {
            $request->session()->regenerate();
        }
            return redirect()->intended('cadastro');
    }
}
