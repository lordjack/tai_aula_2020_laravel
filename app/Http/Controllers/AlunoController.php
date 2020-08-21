<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('aluno');
    }
}
