@extends('blog.layouts.app')

@section('content')
<h1 class="mb-4">Posts in "{{ $category }}"</h1>

<div class="row">
    @forelse ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p>{{ Str::limit($post['content'], 100) }}</p>
                    <a href="{{ route('blog.show', $post['id']) }}" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
    @empty
        <p>No posts available in this category.</p>
    @endforelse
</div>
@endsection
