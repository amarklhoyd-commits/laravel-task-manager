<?php

namespace App\Http\Controllers;

use App\Models\Task;

class ManagerController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();

        return view('tasks.index', compact('tasks'));
    }
}