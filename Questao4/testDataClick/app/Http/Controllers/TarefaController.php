<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefaController extends Controller
{
    public function index(){
        $lista = Tarefa::orderBy("prioridade","asc")->get();
    	return view("tarefa.index", compact("lista"));
    }

    public function novo(Request $request){
        return view("tarefa.create");
    }

    public function edicao(Request $request, $id){
        $tarefa = Tarefa::find($id);
        return view("tarefa.edit", compact("tarefa"));
    }



    public function create(Request $request)
    {
        $data = $request->all();
        $tarefa = Tarefa::create($data);
        $lista = Tarefa::orderBy("prioridade","asc")->get();
        return view("tarefa.index", compact("lista"));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $tarefa = Tarefa::find($id);
        $tarefa->update($data);
        $lista = Tarefa::orderBy("prioridade","asc")->get();
        return view("tarefa.index", compact("lista"));
    }

    public function delete(Request $request)
    {
        $id = $request->query("id");
        $tarefa = Tarefa::find($id);
        $tarefa->delete();
        $lista = Tarefa::orderBy("prioridade","asc")->get();
        return view("tarefa.index", compact("lista"));
    }



}
