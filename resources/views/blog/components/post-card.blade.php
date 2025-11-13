<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <h5 class="card-title">{{ $post['title'] }}</h5>
        <p class="card-subtitle mb-2 text-muted">
            By {{ $post['author'] }} | {{ $post['category'] }} | {{ $post['created_at'] }}
        </p>
        <p class="card-text">{{ Str::limit($post['content'], 120, '...') }}</p>
        <a href="{{ route('blog.show', $post['id']) }}" class="btn btn-primary btn-sm">Read More</a>
    </div>
</div>
