<?php

namespace App\Livewire;

use App\Models\Task as ModelsTask;
use Livewire\Component;

class Task extends Component
{
    public $task;

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

    public function mount($id)
    {
        $this->task = ModelsTask::firstWhere('id', $id);
    }

    public function render()
    {
        return view('livewire.task');
    }
}
