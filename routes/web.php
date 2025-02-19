<?php

use App\Livewire\Dashboard;
use App\Livewire\Project;
use App\Livewire\ProjectForm;
use App\Livewire\Projects;
use App\Livewire\Task;
use App\Livewire\TaskForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/projects', Projects::class)->name('projects');
    Route::get('/create-project', ProjectForm::class)->name('create-project');
    Route::get('/project/edit/{id}', ProjectForm::class)->name('edit-project');
    Route::get('/project/{id}', Project::class)->name('project');

    Route::get('/project/{project}/create-task', TaskForm::class)->name('create-task');
    Route::get('/project/{project}/task/{task}', TaskForm::class)->name('edit-task');

    Route::get('/task/{id}', Task::class)->name('task');
});
