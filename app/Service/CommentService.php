<?php

namespace App\Service;

use App\Repository\Interfaces\CommentRepositoryInterface;

class CommentService
{
    public function __construct(private CommentRepositoryInterface $commentRepository)
    {

    }

    public function getAllComments()
    {
        return $this->commentRepository->getAllComments();
    }
}
