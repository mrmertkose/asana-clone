<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\TaskCreateRequest;
use App\Http\Requests\Task\TaskUpdateTitleRequest;
use App\Models\Task;

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

        return redirect()->back();
    }

    public function complete(Task $task)
    {
        $task->is_completed = true;
        $task->save();

        return redirect()->back();
    }

    public function updateTitle(Task $task,TaskUpdateTitleRequest $request)
    {
        $task->title = $request->validated('title');
        $task->save();

        return redirect()->back();
    }



}
