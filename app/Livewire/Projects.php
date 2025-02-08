<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Projects extends Component
{
    public function newProject()
    {
        return $this->redirectRoute('create-project');
    }

    public function render()
    {
        return view('livewire.projects', [
            'projects' => Project::where('user_id', Auth::id())->get()
        ]);
    }
}
