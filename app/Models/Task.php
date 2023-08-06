<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Task extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $with = ['taskPriority', 'taskStatus'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logUnguarded();
    }

    public function taskPriority(): BelongsTo
    {
        return $this->belongsTo(TaskPriority::class);
    }

    public function taskStatus(): BelongsTo
    {
        return $this->belongsTo(TaskStatus::class);
    }
}
