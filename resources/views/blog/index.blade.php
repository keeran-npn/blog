@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Blog Posts</h1>
            <hr>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <p class="card-text">
                                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                            </p>
                            <p class="card-text">
                                Likes: {{ $post->likes_count }}
                            </p>
                            <a href="{{ route('api.posts.show', $post->id) }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No posts found.</p>
            @endif
        </div>
    </div>
@endsection
