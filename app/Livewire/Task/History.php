<?php

namespace App\Livewire\Task;

use App\Models\Task;
use App\Models\TaskHistory;
use Livewire\Component;

class History extends Component
{
    public Task $task;

    public function read()
    {
        return TaskHistory::where('task_id', $this->task->id)->get();
    }

    public function render()
    {
        return view('livewire.task.history', [
            'histories' => $this->read()
        ]);
    }
}
