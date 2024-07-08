<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        if (!$search) {
            return $query;
        }

        $search = "%{$search}%";

        return $query->where(function(Builder $query) use ($search) {
            $query->where('name', 'LIKE', $search)
                ->orWhere('description', 'LIKE', $search)
                ->orWhere('price', 'LIKE', $search);
        });
    }
}
