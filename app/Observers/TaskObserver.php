<?php

namespace App\Observers;

use App\Models\Task;
use App\Models\TaskHistory;
use Illuminate\Support\Facades\Auth;

class TaskObserver
{
    /**
     * Handle the Task "created" event.
     */
    public function created(Task $task): void
    {
        TaskHistory::create([
            'task_id' => $task->id,
            'user_id' => Auth::id(),
            'action' => "Task created",
        ]);
    }

    /**
     * Handle the Task "updated" event.
     */
    public function updated(Task $task): void
    {
        TaskHistory::create([
            'task_id' => $task->id,
            'user_id' => Auth::id(),
            'action' => "Task updated",
        ]);
    }

    /**
     * Handle the Task "deleted" event.
     */
    public function deleted(Task $task): void
    {
        //
    }

    /**
     * Handle the Task "restored" event.
     */
    public function restored(Task $task): void
    {
        //
    }

    /**
     * Handle the Task "force deleted" event.
     */
    public function forceDeleted(Task $task): void
    {
        //
    }
}
