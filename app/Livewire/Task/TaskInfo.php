<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Livewire\Component;

class TaskInfo extends Component
{
    public Task $task;

    public function delete()
    {
        $project_id = $this->task->project_id;

        $this->task->delete();
        $this->redirectRoute('project', ['id' => $project_id]);
    }

    public function edit()
    {
        $task = $this->task;

        $this->redirectRoute('edit-task', ['project' => $task->project_id, 'task' => $task->id]);
    }

    public function render()
    {
        return view('livewire.task.task-info');
    }
}
