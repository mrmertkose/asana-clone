<?php

namespace App\Http\Requests\Section;

use Illuminate\Foundation\Http\FormRequest;

class SectionUpdateTitleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['nullable','string']
        ];
    }
}
