<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('post')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('api.posts.index');
    Route::post('/', [PostController::class, 'store'])->name('api.posts.store');
    Route::get('/{post_id}', [PostController::class, 'show'])->name('api.posts.show');
    Route::put('/{post_id}', [PostController::class, 'update'])->name('api.posts.update');
    Route::delete('/{post_id}', [PostController::class, 'destroy'])->name('api.posts.destroy');

    // Routes for liking a post
    Route::post('/{post}/like', [LikeController::class, 'like'])->name('api.posts.like');
    Route::delete('/{post}/like', [LikeController::class, 'unlike'])->name('api.posts.unlike');

    // Routes for commenting on a post
    Route::post('/{post}/comments', [CommentController::class, 'store'])->name('api.posts.comments.store');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('api.posts.comments.update');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('api.posts.comments.destroy');
});

