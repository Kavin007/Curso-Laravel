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

    public function editar($id)
    {
      $registro = Curso::find($id);
      return view('editar',compact('registro'));
    }


    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();
      Curso::find($id)->update($dados);

      $registro = Curso::all();
    	return redirect()->route('cursos');
    }

    public function deletar($id)
    {
      Curso::find($id)->delete();
      $registro = Curso::all();

      
      return redirect()->route('cursos');
    }



}