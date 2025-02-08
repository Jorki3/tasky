<?php

use App\Livewire\ProjectForm;
use App\Livewire\Projects;
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
});
