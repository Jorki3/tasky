<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Task;
use Livewire\Component;

class Info extends Component
{
    public $model;
    public $breadcrumbs = [];
    public $isProject = false;

    public function mount(?Project $project = null, Task $task = null)
    {
        $this->isProject = count($project->getAttributes()) === 0 ? false : true;
        $this->model = $this->isProject ? $project : $task;
        $this->generateBreadcrumbs();
    }

    public function generateBreadcrumbs()
    {
        $this->breadcrumbs = $this->isProject
            ? ['project' => $this->model]
            : ['project' => $this->model->project, 'task' => $this->model];
    }

    public function edit()
    {
        $route = $this->isProject ? 'edit-project' : 'edit-task';
        $params = $this->isProject
            ? ['id' => $this->model->id]
            : ['project' => $this->model->project_id, 'task' => $this->model->id];

        $this->redirectRoute($route, $params);
    }

    public function delete()
    {
        $project_id = $this->isProject ? null : $this->model->project_id;
        $this->model->delete();

        $route = $this->isProject ? 'projects' : 'project';
        $params = $this->isProject ? [] : ['id' => $project_id];

        $this->redirectRoute($route, $params);
    }

    public function newTask()
    {
        $this->redirectRoute('create-task', ['project' => $this->model->id]);
    }

    public function render()
    {
        return view('livewire.info', [
            'breadcrumbs' => $this->breadcrumbs,
            'model' => $this->model,
            'isProject' => $this->isProject,
        ]);
    }
}
