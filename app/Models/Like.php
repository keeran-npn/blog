<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Like extends Model
{
    use HasFactory;
    protected $guarded;

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'users');
    }
    public function post(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'posts');
    }
    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id');
    }

}
