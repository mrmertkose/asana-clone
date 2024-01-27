<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'due_date',
        'user_id',
        'section_id',
        'is_completed',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
