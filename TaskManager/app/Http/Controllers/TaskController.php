<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Show Add Task Page
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('tasks.create');
    }


    /*
    |--------------------------------------------------------------------------
    | Save New Task
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:Pending,Completed',
            'due_date' => 'nullable|date',
        ]);

        Task::create([
            'task_name' => $request->task_name,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date,
        ]);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task added successfully!');
    }


    /*
    |--------------------------------------------------------------------------
    | Show Edit Task Page
    |--------------------------------------------------------------------------
    */

    public function edit(Task $task)
    {
        return view('tasks.form', compact('task'));
    }


    /*
    |--------------------------------------------------------------------------
    | Update Task
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_name' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:Pending,Completed',
            'due_date' => 'nullable|date',
        ]);

        $task->update([
            'task_name' => $request->task_name,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date,
        ]);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task updated successfully!');
    }


    /*
    |--------------------------------------------------------------------------
    | Delete Task
    |--------------------------------------------------------------------------
    */

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task deleted successfully!');
    }


    /*
    |--------------------------------------------------------------------------
    | Update Task Status
    |--------------------------------------------------------------------------
    */

    public function updateStatus(Request $request, Task $task)
    {
        $request->validate([
            'status' => 'required|in:Pending,Completed',
        ]);

        $task->update([
            'status' => $request->status,
        ]);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task status updated!');
    }
}