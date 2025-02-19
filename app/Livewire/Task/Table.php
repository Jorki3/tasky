<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Livewire\Component;

class Table extends Component
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

    public function watchTask($id)
    {
        $this->redirectRoute('task', ['id' => $id]);
    }

    public function edit($task)
    {
        $this->redirectRoute('edit-task', ['project' => $this->project->id, 'task' => $task]);
    }

    public function render()
    {
        return view('livewire.task.table', [
            'tasks' => $this->read()
        ]);
    }
}
