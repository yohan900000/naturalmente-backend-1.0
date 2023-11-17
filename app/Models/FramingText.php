<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FramingText extends Model
{
    use HasFactory;

    public function gamme(): BelongsTo
    {
        return $this->belongsTo(Gamme::class);
    }

    protected $fillable = [
        'description',
        'gamme_id'
    ];
}
