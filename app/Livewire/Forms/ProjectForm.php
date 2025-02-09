<?php

namespace App\Livewire\Forms;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProjectForm extends Form
{
    public ?Project $project;
    public $name;
    public $description;
    public $status;

    public function store()
    {
        Project::create([
            'name' => $this->name,
            'description' => $this->description,
            'user_id' => Auth::id()
        ]);
    }

    public function update()
    {
        $this->project->update([
            'name' => $this->name,
            'description' => $this->description,
            'status' => $this->status
        ]);
    }

    public function set(Project $project)
    {
        $this->project = $project;

        $this->name = $project->name;
        $this->description = $project->description;
        $this->status = $project->status;
    }
}
