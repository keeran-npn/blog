<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Resources\PostsResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return PostsResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
        try {
            DB::beginTransaction();

            DB::commit();
            [$msg, $stc] = array("Post created successfully.", Response::HTTP_CREATED);
        } catch (\Exception $e) {
            Log::alert($e->getMessage());
            [$msg, $stc] = array("Something went wrong !!!", Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json($msg, $stc);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request)
    {
        try {
            DB::beginTransaction();

            DB::commit();
            [$msg, $stc] = array("Post updated successfully.", Response::HTTP_CREATED);
        } catch (\Exception $e) {
            Log::alert($e->getMessage());
            [$msg, $stc] = array("Something went wrong !!!", Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json($msg, $stc);
    }

    /**
     * Display the specified resource.
     */
    public function show($post_id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post_id)
    {
        try {
            DB::beginTransaction();

            DB::commit();
            [$msg, $stc] = array("Post deleted successfully.", Response::HTTP_CREATED);
        } catch (\Exception $e) {
            Log::alert($e->getMessage());
            [$msg, $stc] = array("Something went wrong !!!", Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json($msg, $stc);
    }
}
