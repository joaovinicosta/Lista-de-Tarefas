<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
   public function index()
   {
      $tarefas = tarefa::all();
      return view('/tarefas', compact('tarefas'));
   }
}
