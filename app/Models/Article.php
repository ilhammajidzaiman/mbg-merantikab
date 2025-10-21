<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Traits\ReadTimeTrait;
use App\Traits\FormatDateTimeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use SoftDeletes, FormatDateTimeTrait, ReadTimeTrait;

    protected $fillable = [
        'title',
        'slug',
        'is_active',
        'category_id',
        'content',
        'description',
        'file',
        'attachment',
    ];

    protected $hidden = [
        'uuid',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'attachment' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'posts', 'article_id', 'tag_id')->withTimestamps();
    }
}
