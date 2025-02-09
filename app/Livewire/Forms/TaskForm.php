<?php

namespace App\Livewire\Forms;

use App\Models\Task;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    public ?Task $task;

    public $name;
    public $description;
    public $status;
    public $due_date;

    public function store($projectId)
    {
        Task::create([
            'name' => $this->name,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'project_id' => $projectId,
        ]);
    }
}
