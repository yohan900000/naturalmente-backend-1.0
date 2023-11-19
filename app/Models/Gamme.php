<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gamme extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function framingText(): HasMany
    {
        return $this->hasMany(FramingText::class);
    }
    public function text(): HasMany
    {
        return $this->hasMany(Text::class);
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}
