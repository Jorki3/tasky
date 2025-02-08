<?php

namespace App\Livewire\Forms;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProjectForm extends Form
{
    public $name;
    public $description;

    public function store()
    {
        Project::create([
            'name' => $this->name,
            'description' => $this->description,
            'user_id' => Auth::id()
        ]);
    }
}
