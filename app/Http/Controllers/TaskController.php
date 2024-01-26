<?php

namespace App\Http\Controllers;

use App\Interfaces\TaskRepositoryInterface;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TaskController extends Controller
{
    public function __construct(private TaskRepositoryInterface $taskRepository)
    {
    }

    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        return Inertia::render('Tasks', [
            'tasks' => $tasks
        ]);
    }
}
