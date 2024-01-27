<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionUpdatePositionRequest;
use App\Http\Resources\SectionCollection;
use App\Http\Resources\SectionResource;
use App\Interfaces\SectionRepositoryInterface;
use App\Models\Section;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SectionController extends Controller
{

    public function __construct(protected SectionRepositoryInterface $sectionRepository)
    {
    }

    public function index()
    {
        $sections = $this->sectionRepository->getAllSections();
        return Inertia::render('Sections', [
            'sections' => SectionResource::collection($sections)
        ]);
    }

    public function updatePosition(SectionUpdatePositionRequest $request)
    {
        $validatedData = $request->validated();
        $this->sectionRepository->updatePosition($validatedData);
        return redirect()->back();
    }

}
