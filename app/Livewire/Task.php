<?php

namespace App\Livewire;

use App\Models\Task as ModelsTask;
use Livewire\Component;

class Task extends Component
{
    public $task;
    public $project = null;

    public function mount($id)
    {
        $this->task = ModelsTask::firstWhere('id', $id);
    }

    public function render()
    {
        return view('livewire.task');
    }
}
