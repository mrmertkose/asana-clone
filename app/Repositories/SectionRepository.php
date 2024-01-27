<?php

namespace App\Repositories;

use App\Interfaces\SectionRepositoryInterface;
use App\Models\Section;
use Illuminate\Database\Eloquent\Collection;

class SectionRepository implements SectionRepositoryInterface
{
    public function __construct()
    {
    }

    public function getAllSections(): Collection|array
    {
        return Section::with(['task'])->orderBy('position')->get();
    }

    public function updatePosition(array $arrayData): void
    {
        foreach ($arrayData as $item) {
            Section::where('id', $item["id"])
                ->update(['position' => $item['position']]);
        }
    }
}
