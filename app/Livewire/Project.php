<?php

namespace App\Livewire;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public ModelsProject $project;

    public function edit()
    {
        $id = $this->project->id;

        $this->redirectRoute('edit-project', ['id' => $id]);
    }

    public function delete()
    {
        $this->project->delete();
        $this->redirectRoute('projects');
    }

    public function mount($id)
    {
        $this->project = ModelsProject::firstWhere('id', $id);
    }

    public function render()
    {
        return view('livewire.project');
    }
}
