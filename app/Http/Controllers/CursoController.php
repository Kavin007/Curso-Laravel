<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    //

    public function index(){
    	$registros = Curso::all();
    	return view('index',compact('registros'));
    }

    public function adicionar(){

    	return view('adicionar');
    }


    public function salvar(Request $req)
    {
      $dados = $req->all();
      Curso::create($dados);

      return view('adicionar');

    

    }

}