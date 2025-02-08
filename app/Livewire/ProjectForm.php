<?php

namespace App\Livewire;

use App\Livewire\Forms\ProjectForm as FormsProjectForm;
use Livewire\Component;

class ProjectForm extends Component
{
    public FormsProjectForm $form;

    public function create()
    {
        $this->form->store();

        $this->redirectRoute('projects');
    }

    public function render()
    {
        return view('livewire.project-form');
    }
}
