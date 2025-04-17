<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                <a href="/blog" class="btn btn-primary px-4 mb-4">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>

                <h2 class="fw-bold">{{ $blog->title }}</h2>
                <p class="text-muted">Posted on {{ $blog->created_at->format('d M Y, H:i') }}</p>

                <div class="my-3">
                    <img src="/{{$blog->cover}}" class="img-fluid rounded" alt="Cover Image">
                </div>

                <div class="py-3">
                    <p class="lead">{{ $blog->body }}</p>
                </div>

                <!-- Add more styles or elements like a share button or a comment section here -->
            </div>
        </div>
    </div>
</div>