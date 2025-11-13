@extends('blog.layouts.app')

@section('content')
<h1 class="mb-4">Latest Blog Posts</h1>

<div class="row">
    @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text text-muted">Category: {{ $post['category'] }}</p>
                    <p>{{ Str::limit($post['content'], 100) }}</p>
                    <a href="{{ route('blog.show', $post['id']) }}" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
