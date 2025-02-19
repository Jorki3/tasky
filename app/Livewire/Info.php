<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Task;
use Livewire\Component;

class Info extends Component
{
    public ?Task $task = null;
    public ?Project $project = null;

    public $model;
    public $isProject = false;

    public function edit()
    {
        $model = $this->model;

        if ($this->isProject) {
            $this->redirectRoute('edit-project', ['id' => $model->id]);

            return;
        }

        $this->redirectRoute('edit-task', ['project' => $model->project_id, 'task' => $model->id]);
    }

    public function delete()
    {
        $project_id = !$this->isProject ? $this->model->project_id : '';
        $this->model->delete();

        if ($this->isProject) {
            $this->redirectRoute('projects');

            return;
        }

        $this->redirectRoute('project', ['id' => $project_id]);
    }

    public function newTask()
    {
        $this->redirectRoute('create-task', ['project' => $this->model->id]);
    }

    public function mount()
    {
        if ($this->project) {
            $this->model = $this->project;
            $this->isProject = true;

            return;
        }

        $this->model = $this->task;
    }

    public function render()
    {
        return view('livewire.info');
    }
}
