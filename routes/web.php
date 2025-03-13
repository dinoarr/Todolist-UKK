<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'dashboard'])->name('dashboard');
Route::get('completed', [PagesController::class, 'completed'])->name('pages.completed');

Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('tasks/edit', [TaskController::class, 'edit'])->name('tasks.edit');
