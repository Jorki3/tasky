<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $project;

    public $theaders = [
        'Name',
        'Description',
        'Status',
        'Due Date',
        'Action'
    ];

    public function read()
    {
        return Task::where('project_id', $this->project->id)->get();
    }

    public function edit($task)
    {
        $this->redirectRoute('edit-task', ['project' => $this->project->id, 'task' => $task]);
    }

    public function render()
    {
        return view('livewire.task-list', [
            'tasks' => $this->read()
        ]);
    }
}
