@extends('blog.layout')

@section('title', $post->title . ' - COCO Island Holidays')
@section('description', $post->seo?->description ?? Str::limit(strip_tags($post->body), 160))

@section('content')
<!-- page title area start -->
<section class="page-title">
    <div class="page-title-inner d-flex align-items-center text-center" data-background="{{ asset('frontend/assets/img/page_title/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-breadcrumb">
                        <h1>{{ Str::limit($post->title, 50) }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($post->title, 30) }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->

<!-- blog area start -->
<section class="blog-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="blog-wrapper pb-50 mb-50">
                    <div class="blog-inner">
                        <div class="blog-img w-img">
                            <img src="{{ asset('storage/' . $post->cover_photo_path) }}" alt="{{ $post->photo_alt_text }}">
                        </div>
                        <div class="blog-text mt-20">
                            <h4>{{ $post->title }}</h4>
                            <div class="blog-meta">
                                <span>{{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}</span>
                                <span><a href="#">BY : {{ $post->user->name }}</a></span>
                                @if($post->categories->count() > 0)
                                <span><a href="{{ route('blog.category', $post->categories->first()->slug) }}">{{ $post->categories->first()->name }}</a></span>
                                @endif
                            </div>
                            
                            @if($post->sub_title)
                            <p class="lead mb-4">{{ $post->sub_title }}</p>
                            @endif

                            <div class="blog-content">
                                {!! $post->body !!}
                            </div>

                            @if($post->tags->count() > 0)
                            <div class="blog-tags mt-4">
                                <strong>Tags:</strong>
                                @foreach($post->tags as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}" class="badge badge-secondary mr-2">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                            @endif

                            <div class="blog-social text-center mb-50 mt-40">
                                <ul>
                                    <li><a href="#" onclick="shareOnFacebook()"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" onclick="shareOnTwitter()"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" onclick="shareOnLinkedIn()"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" onclick="copyLink()"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    @if($comments->count() > 0)
                    <div class="blog-comment-area">
                        <div class="blog-comment-title mb-25">
                            <h2 class="blog-right-line">{{ $comments->count() }} COMMENTS</h2>
                        </div>

                        <div class="blog-comment-wrapper">
                            <ul>
                                @foreach($comments as $comment)
                                <li>
                                    <div class="single-comment d-flex mb-40">
                                        <div class="user-avater mr-20">
                                            <img src="{{ asset('frontend/assets/img/blog/blog-details/comments/comments.jpg') }}" alt="comment">
                                        </div>
                                        <div class="user-comment">
                                            <div class="comment-meta">
                                                <span class="username">{{ $comment->user->name }}</span>
                                                <span class="date">{{ $comment->created_at->format('M d Y') }}</span>
                                            </div>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    <!-- Comment Form -->
                    <div class="blog-comment-form">
                        <h2 class="blog-right-line mb-35">LEAVE A COMMENT</h2>
                        <form action="{{ route('blog.comment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="comment-form-inner d-flex align-items-center mb-40">
                                <div class="row w-100">
                                    <div class="col-xl-12">
                                        <div class="comment-text">
                                            <textarea class="comment-txt" name="comment" placeholder="Comment" rows="4" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="btn btn-square" type="submit">SEND COMMENT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="blog-sidebar">
                    <!-- Search Widget -->
                    <div class="sidebar-widget mb-40">
                        <div class="sidebar-widget-title mb-30">
                            <h3 class="blog-right-line">SEARCH</h3>
                        </div>
                        <div class="sidebar-widget-content">
                            <div class="search-form-sidebar">
                                <form action="{{ route('blog.search') }}" method="GET">
                                    <input type="text" name="q" placeholder="Search posts..." value="{{ request('q') }}">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget mb-40">
                        <div class="sidebar-widget-title mb-30">
                            <h3 class="blog-right-line">CATEGORIES</h3>
                        </div>
                        <div class="sidebar-widget-content">
                            <div class="sidebar-catagory">
                                <ul>
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a>
                                        <span class="f-right">({{ $category->posts_count }})</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="sidebar-widget mb-40">
                        <div class="sidebar-widget-title mb-30">
                            <h3 class="blog-right-line">RECENT POSTS</h3>
                        </div>
                        <div class="sidebar-widget-content">
                            <div class="rc-post">
                                <ul>
                                    @foreach($recentPosts as $recentPost)
                                    <li>
                                        <div class="single-rc-post d-flex align-items-center">
                                            <div class="rc-thumb mr-20">
                                                <a href="{{ route('blog.show', $recentPost->slug) }}">
                                                    <img src="{{ asset('storage/' . $recentPost->cover_photo_path) }}" alt="{{ $recentPost->photo_alt_text }}">
                                                </a>
                                            </div>
                                            <div class="rc-content">
                                                <div class="rc-meta">
                                                    <span>{{ $recentPost->published_at ? $recentPost->published_at->format('M d Y') : 'Draft' }}</span>
                                                </div>
                                                <h6><a href="{{ route('blog.show', $recentPost->slug) }}">{{ Str::limit($recentPost->title, 60) }}</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Related Posts Widget -->
                    @if($relatedPosts->count() > 0)
                    <div class="sidebar-widget mb-40">
                        <div class="sidebar-widget-title mb-30">
                            <h3 class="blog-right-line">RELATED POSTS</h3>
                        </div>
                        <div class="sidebar-widget-content">
                            <div class="rc-post">
                                <ul>
                                    @foreach($relatedPosts as $relatedPost)
                                    <li>
                                        <div class="single-rc-post d-flex align-items-center">
                                            <div class="rc-thumb mr-20">
                                                <a href="{{ route('blog.show', $relatedPost->slug) }}">
                                                    <img src="{{ asset('storage/' . $relatedPost->cover_photo_path) }}" alt="{{ $relatedPost->photo_alt_text }}">
                                                </a>
                                            </div>
                                            <div class="rc-content">
                                                <div class="rc-meta">
                                                    <span>{{ $relatedPost->published_at ? $relatedPost->published_at->format('M d Y') : 'Draft' }}</span>
                                                </div>
                                                <h6><a href="{{ route('blog.show', $relatedPost->slug) }}">{{ Str::limit($relatedPost->title, 60) }}</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Tags Widget -->
                    <div class="sidebar-widget mb-40">
                        <div class="sidebar-widget-title mb-30">
                            <h3 class="blog-right-line">Tags</h3>
                        </div>
                        <div class="sidebar-widget-content">
                            <div class="sidebar-tags">
                                @foreach($tags as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="sidebar-widget grey-bg-4 mb-40 pt-20 pl-20 pb-20">
                        <div class="sidebar-widget-title mb-20">
                            <h3 class="blog-right-line">Newsletter</h3>
                        </div>
                        <div class="sidebar-widget-content">
                            <div class="news-letter">
                                <p>Subscribe to our newsletter for the latest updates and travel tips!</p>
                                <form action="{{ route('blog.newsletter.subscribe') }}" method="POST" class="mt-3">
                                    @csrf
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your email address" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->
@endsection

@push('scripts')
<script>
function shareOnFacebook() {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent('{{ $post->title }}');
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
}

function shareOnTwitter() {
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent('{{ $post->title }}');
    window.open(`https://twitter.com/intent/tweet?url=${url}&text=${text}`, '_blank');
}

function shareOnLinkedIn() {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent('{{ $post->title }}');
    window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${url}`, '_blank');
}

function copyLink() {
    navigator.clipboard.writeText(window.location.href).then(function() {
        alert('Link copied to clipboard!');
    });
}
</script>
@endpush
