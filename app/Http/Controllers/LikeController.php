<?php

namespace App\Http\Controllers;

use App\Http\Resources\LikesResource;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Post $post) {
        $user = auth()->user();
        $post->likes()->attach($user->id);
        return response()->json(['message' => 'Post Liked']);
//        return LikesResource::collection($post);
    }

    public function unlike(Post $post)
    {
        $user = auth()->user();
        $post->likes()->detach($user->id);

        return response()->json(['message' => 'Post unliked']);
    }
}
