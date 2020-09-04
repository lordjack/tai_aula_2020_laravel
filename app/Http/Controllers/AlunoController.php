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

}
