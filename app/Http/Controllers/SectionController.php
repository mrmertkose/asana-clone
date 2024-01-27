<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionUpdatePositionRequest;
use App\Http\Resources\SectionResource;
use App\Models\Section;
use Inertia\Inertia;

class SectionController extends Controller
{

    public function index()
    {
        $sections = Section::with(['task'])->orderBy('position')->get();

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

}
