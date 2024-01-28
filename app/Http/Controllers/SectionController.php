<?php

namespace App\Http\Controllers;

use App\Http\Requests\Section\SectionUpdatePositionRequest;
use App\Http\Requests\Section\SectionUpdateTitleRequest;
use App\Http\Resources\SectionResource;
use App\Models\Section;
use Inertia\Inertia;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::with(['task' => function ($query) {
            $query->where('is_completed', false);
        }])->orderBy('position')->get();

        return Inertia::render('Sections', [
            'sections' => SectionResource::collection($sections)
        ]);
    }

    public function updatePosition(SectionUpdatePositionRequest $request)
    {
        $validatedData = $request->validated();

        foreach ($validatedData as $item) {
            Section::where('id', $item["id"])
                ->update(['position' => $item['position']]);
        }

        return redirect()->back();
    }

    public function updateTitle(Section $section,SectionUpdateTitleRequest $request)
    {
        $section->title = $request->validated('title');
        $section->save();

        return redirect()->back();
    }

    public function create()
    {
        $section = Section::latest('position')->first();
        $position = $section ? ($section->position + 1) : 1;

        Section::create([
            'position' => $position,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back();
    }
}
