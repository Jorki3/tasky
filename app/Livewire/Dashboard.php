<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $theaders = [
        'Name',
        'Description',
        'Status',
        'Due Date',
        'Action'
    ];

    public function watchTask($id)
    {
        $this->redirectRoute('task', ['id' => $id]);
    }

    public function read()
    {
        return Task::whereHas('project', function ($query) {
            $query->where('user_id', Auth::id());
        })
            ->get();
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'tasks' => $this->read()
        ]);
    }
}
