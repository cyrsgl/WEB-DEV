@extends('blog.layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h1>{{ $post['title'] }}</h1>
        <p class="text-muted">
            By {{ $post['author'] }} | Category: {{ $post['category'] }} | {{ $post['created_at'] }}
        </p>
        <hr>
        <p>{{ $post['content'] }}</p>
        <a href="{{ route('blog.index') }}" class="btn btn-secondary mt-3">Back to Blog</a>
    </div>
</div>
@endsection
