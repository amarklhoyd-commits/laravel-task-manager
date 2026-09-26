<?php

namespace Tests\Feature;

use Tests\TestCase;

class TaskFormSubmissionTest extends TestCase
{
    public function test_manager_form_uses_valid_store_action_url(): void
    {
        $html = view('manager.form', [
            'errors' => new \Illuminate\Support\ViewErrorBag(),
        ])->render();

        $this->assertStringContainsString('action="' . route('tasks.store') . '"', $html);
        $this->assertStringNotContainsString('action="/' . route('tasks.store'), $html);
    }

    public function test_manager_form_uses_valid_update_action_url_for_existing_task(): void
    {
        $task = new \App\Models\Task([
            'task_name' => 'Test task',
            'description' => 'Sample',
            'status' => 'Pending',
            'due_date' => '2026-09-30',
        ]);
        $task->id = 1;

        $html = view('manager.form', [
            'task' => $task,
            'errors' => new \Illuminate\Support\ViewErrorBag(),
        ])->render();

        $this->assertStringContainsString('action="' . route('tasks.update', $task->id) . '"', $html);
        $this->assertStringNotContainsString('action="/' . route('tasks.update', $task->id), $html);
    }
}
