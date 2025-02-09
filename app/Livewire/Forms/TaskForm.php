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

    public function update()
    {
        $this->task->update([
            'name' => $this->name,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'status' => $this->status
        ]);
    }

    public function set(Task $task)
    {
        $this->task = $task;

        $this->name = $task->name;
        $this->description = $task->description;
        $this->due_date = $task->due_date;
        $this->status = $task->status;
    }
}
