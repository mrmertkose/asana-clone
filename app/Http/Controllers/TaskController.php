<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskCreateRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(TaskCreateRequest $request)
    {
        $sectionId = $request->validated("section_id");

        Task::create([
            "section_id" => $sectionId,
            "user_id" => auth()->id()
        ]);

        return redirect()->back();
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('section.index');
    }
}
