<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'section_id' => ['required','integer','min:1','exists:sections,id'],
        ];
    }
}
