<?php

use App\Livewire\Project;
use App\Livewire\ProjectForm;
use App\Livewire\Projects;
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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/projects', Projects::class)->name('projects');
    Route::get('/create-project', ProjectForm::class)->name('create-project');
    Route::get('/project/edit/{id}', ProjectForm::class)->name('edit-project');
    Route::get('/project/{id}', Project::class)->name('project');

    Route::get('/project/{project}/create-task', TaskForm::class)->name('create-task');
});
