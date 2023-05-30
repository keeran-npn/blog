<?php

namespace App\Repository;

use App\Models\Comment;
use App\Repository\Interfaces\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{

    public function getAllComments()
    {
        return Comment::get();
    }
}
