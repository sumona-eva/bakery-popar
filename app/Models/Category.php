<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id')->select(['id','parent_id','name','slug', 'icon', 'banner', 'description']);
    }
   
}
                                                                                          