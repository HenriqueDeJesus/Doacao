<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FuncionarioController extends Controller
{
    public function loginfuncionario(){
        if(Auth::user())
            return view('dashboardfuncionario');
        else 
            return view('loginfuncionario');
    }

    public function logar(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::guard('funcionario')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboardfuncionario');
        }

        return back()->withErrors([
            'email' => 'Erro do email',
        ])->onlyInput('email');
    }

    public function dashboard(){

        return view('dashboardfuncionario');
    }

    public function logout(Request $request){

        Auth::guard('funcionario')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('loginfuncionario');
    }
}
