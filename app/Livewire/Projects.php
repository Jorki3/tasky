<?php

namespace App\Livewire;

use Livewire\Component;

class Projects extends Component
{
    public function newProject()
    {
        return $this->redirectRoute('create-project');
    }

    public function render()
    {
        return view('livewire.projects');
    }
}
