<?php

namespace App\Providers;

use App\Repository\BaseRepository;
use App\Repository\CommentRepository;
use App\Repository\Interfaces\CommentRepositoryInterface;
use App\Repository\Interfaces\EloquentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register() {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(CommentRepositoryInterface::class, CommentRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
