<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use App\AlunoModel;
use Illuminate\Support\Facades\DB;

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
            'nome' => 'required|max:100',
            'curso' => 'required',
        ]);

        $objAluno = new AlunoModel();
        $objAluno->nome = $request->nome;
        $objAluno->curso = $request->curso;
        $objAluno->turma = $request->turma;

        $objAluno->save();

        return redirect()->action('AlunoController@index')
            ->with('success', 'Aluno Salvo com sucesso.');
    }

    public function edit($id)
    {
        $objAluno = AlunoModel::findorfail($id);

        return view('aluno.edit')->with('aluno', $objAluno);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'curso' => 'required',
        ]);

        $objAluno = AlunoModel::findorfail($request->id);
        $objAluno->nome = $request->nome;
        $objAluno->curso = $request->curso;
        $objAluno->turma = $request->turma;

        $objAluno->save();

        return redirect()->action('AlunoController@index')
            ->with('success', 'Aluno Editado com sucesso.');
    }

    public function remove($id)
    {

        $objAluno = AlunoModel::findOrFail($id);

        $objAluno->delete();

        return redirect()->action('AlunoController@index')
            ->with('success', 'Aluno Removido com sucesso.');
    }


    public function search(Request $request)
    {
        //opção 01
        //$objAluno = AlunoModel::where('nome', 'LIKE', '%' . $request->nome . '%')->orWhere('curso', 'LIKE', '%' . $request->curso . '%')->get();

        //opção 02

        //validação do formulário
        /*
        $request->validate([
            // 'nome' => 'required|unique:posts|max:255',
            'nome' => 'min:3',
            'autor' => 'min:3',
        ]);
        */
        /*
        $query = DB::table('alunos');

        $nome = $request->nome;
        $curso = $request->curso;

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }
        if (!empty($curso)) {
            $query->where('curso', 'like', '%' . $curso . '%');
        }
        $alunos = $query->orderBy('id')->get();

        */
        if (!empty($request->nome)) {
            $alunos = AlunoModel::where('nome', 'LIKE', '%' . $request->nome . '%')->get();
        }
        if (!empty($request->curso)) {
            $alunos = AlunoModel::where('curso', 'LIKE', '%' . $request->curso . '%')->get();
        } else {
            $alunos = AlunoModel::orderBy("id")->get();
        }

        return view('aluno.list')->with('alunos', $alunos);
    }
}
