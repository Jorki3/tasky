<?php

namespace App\Livewire;

use App\Models\TaskHistory as ModelsTaskHistory;
use Livewire\Component;

class TaskHistory extends Component
{
    public $task;

    public function read()
    {
        return ModelsTaskHistory::where('task_id', $this->task->id)->get();
    }

    public function render()
    {
        return view('livewire.task-history', [
            'histories' => $this->read()
        ]);
    }
}
