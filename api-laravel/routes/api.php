<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tarefasController;

Route::get('/tarefas', [tarefasController::class, 'index']);
Route::post('/tarefas', [tarefasController::class, 'store']);
Route::get('tarefas/{id}', [tarefasController::class, 'show']);
Route::put('tarefas/{id}', [tarefasController::class, 'update']);
Route::delete('tarefas/{id}', [tarefasController::class, 'destroy']);