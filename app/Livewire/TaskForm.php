<?php

namespace App\Livewire;

use App\Livewire\Forms\TaskForm as FormsTaskForm;
use App\Models\Project;
use Livewire\Component;

class TaskForm extends Component
{
    public FormsTaskForm $form;
    public Project $project;

    public $action = 'Create';
    public $method = "create";

    public $id;

    public function create()
    {
        $this->form->store($this->project->id);

        $this->redirectRoute('project', ['id' => $this->project->id]);
    }

    public function mount($project)
    {
        $this->project = $project;
    }

    public function render()
    {
        return view('livewire.task-form');
    }
}
