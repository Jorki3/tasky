<?php

namespace App\Livewire;

use App\Enums\ProjectStatus;
use App\Livewire\Forms\ProjectForm as FormsProjectForm;
use App\Models\Project;
use Livewire\Component;

class ProjectForm extends Component
{
    public FormsProjectForm $form;

    public $action = 'Create';
    public $method = "create";

    public $id;

    public function create()
    {
        $this->form->store();

        $this->redirectRoute('projects');
    }

    public function edit()
    {
        $this->form->update();
        $this->redirectRoute('project', ['id' => $this->id]);
    }

    public function mount($id = null)
    {
        if (!$id) {
            return;
        }

        $project = Project::firstWhere('id', $id);
        $this->form->set($project);
        $this->action = 'Edit';
        $this->method = 'edit';
    }

    public function render()
    {
        return view('livewire.project-form', [
            'statuses' => ProjectStatus::cases()
        ]);
    }
}
