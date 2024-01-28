<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class TaskUpdateTitleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['nullable','string']
        ];
    }
}
