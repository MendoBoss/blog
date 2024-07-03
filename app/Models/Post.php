<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }
    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

}
