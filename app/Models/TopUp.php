<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TopUp extends Model
{
    /** @use HasFactory<\Database\Factories\TopUpFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'amount',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
