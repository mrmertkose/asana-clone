<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionUpdatePositionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            '*.id' => ['required','integer','min:1'],
            '*.position' => ['required','integer','min:1']
        ];
    }
}
