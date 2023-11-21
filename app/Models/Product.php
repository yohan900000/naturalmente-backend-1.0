<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    public function gamme(): belongsTo {
        return $this->belongsTo(Gamme::class);
    }

    protected $fillable = [
        'title',
        'description',
        'picture',
        'gamme_id'
    ];
}
