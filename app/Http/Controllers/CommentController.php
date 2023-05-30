<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\CommentUpdateRequest;
use App\Models\Comment;
use App\Service\CommentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
    public function __construct(private CommentService $commentService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = $this->commentService->getAllComments();
        return view('blog.index', compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentStoreRequest $request)
    {
        try {
            DB::beginTransaction();

            DB::commit();
            [$msg, $stc] = array("Comment created successfully.", Response::HTTP_CREATED);
        } catch (\Exception $e) {
            Log::alert($e->getMessage());
            [$msg, $stc] = array("Something went wrong !!!", Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json($msg, $stc);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentUpdateRequest $request)
    {
        try {
            DB::beginTransaction();

            DB::commit();
            [$msg, $stc] = array("Comment updated successfully.", Response::HTTP_CREATED);
        } catch (\Exception $e) {
            Log::alert($e->getMessage());
            [$msg, $stc] = array("Something went wrong !!!", Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json($msg, $stc);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($comment_id)
    {
        try {
            DB::beginTransaction();

            DB::commit();
            [$msg, $stc] = array("Comment deleted successfully.", Response::HTTP_CREATED);
        } catch (\Exception $e) {
            Log::alert($e->getMessage());
            [$msg, $stc] = array("Something went wrong !!!", Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json($msg, $stc);
    }
}
