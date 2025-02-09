<?php

namespace App\Livewire;

use App\Enums\TaskStatus;
use App\Livewire\Forms\TaskForm as FormsTaskForm;
use App\Models\Project;
use App\Models\Task;
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

    public function edit()
    {
        $this->form->update();
        $this->redirectRoute('project', ['id' => $this->project->id]);
    }

    public function mount($project, $task = null)
    {
        $this->project = $project;

        if (!$task) {
            return;
        }

        $task = Task::firstWhere('id', $task);
        $this->form->set($task);
        $this->action = 'Edit';
        $this->method = 'edit';
    }

    public function render()
    {
        return view(
            'livewire.task-form',
            [
                'statuses' => TaskStatus::cases()
            ]
        );
    }
}
