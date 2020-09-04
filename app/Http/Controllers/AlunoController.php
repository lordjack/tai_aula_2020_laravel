<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use App\AlunoModel;

class AlunoController extends Controller
{
    public function index()
    {
        $objAluno = AlunoModel::orderBy("id")->get();
        return view('aluno.list')->with('alunos', $objAluno);
    }

    public function create()
    {
        return view("aluno.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required|max:100',
            'curso'=>'required',
        ]);

        $objAluno = new AlunoModel();
        $objAluno->nome = $request->nome;
        $objAluno->curso = $request->curso;
        $objAluno->turma = $request->turma;

        $objAluno->save();

        return redirect()->action('AlunoController@index')
            ->with('success', 'Aluno Salvo com sucesso.');
    }
}
