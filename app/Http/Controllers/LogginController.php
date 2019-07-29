<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use Auth;

class LogginController extends Controller
{
    //

    public function login()
    {
        return view('login');
    }

    public function entrar(Request $req)
    {
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){

            $registro = Curso::all();
    	    return redirect()->route('cursos');
        }
        
        return redirect()->route('login');
    }

    public function sair()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
