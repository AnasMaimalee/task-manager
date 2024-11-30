<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }

    /**
     * @return HasMany
     */
    public function comments(): hasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return HasMany
     */
    public function files(): hasMany
    {
        return $this->hasMany(File::class);
    }
}
