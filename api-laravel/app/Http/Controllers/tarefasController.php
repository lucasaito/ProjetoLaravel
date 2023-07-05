<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tarefas;

class tarefasController extends Controller
{
    public function index()
    {
        return tarefas::all();
    }

    public function store(Request $request)
    {
        tarefas::create($request->all());
        return ('Tarefa criada com sucesso');
    }

    public function show(string $id)
    {
        return tarefas::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $tarefa = tarefas::findOrFail($id);
        $tarefa->update($request->all());
        return ('Tarefa atualizada com sucesso');
    }

    public function destroy(string $id)
    {
        $tarefa = tarefas::findOrFail($id);
        $tarefa->delete();
        return ('Tarefa deletada com sucesso');
    }
}