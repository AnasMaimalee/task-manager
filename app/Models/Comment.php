<?php

namespace App\Models;

use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function task(): belongsTo
    {
        return $this->belongsTo(Task::class);
    }
}
