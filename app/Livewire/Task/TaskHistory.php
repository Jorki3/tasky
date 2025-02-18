<?php

namespace App\Livewire\Task;

use App\Models\Task;
use App\Models\TaskHistory as ModelsTaskHistory;
use Livewire\Component;

class TaskHistory extends Component
{
    public Task $task;

    public function read()
    {
        return ModelsTaskHistory::where('task_id', $this->task->id)->get();
    }

    public function render()
    {
        return view('livewire.task.task-history', [
            'histories' => $this->read()
        ]);
    }
}
