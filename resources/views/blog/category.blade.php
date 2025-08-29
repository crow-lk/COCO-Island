@extends('blog.layout')

@section('title', $category->name . ' - COCO Island Holidays')
@section('description', 'Browse all blog posts in the ' . $category->name . ' category.')

@section('content')
<!-- page title area start -->
<section class="page-title">
    <div class="page-title-inner d-flex align-items-center text-center" data-background="{{ asset('frontend/assets/img/page_title/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-breadcrumb">
                        <h1>{{ $category->name }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
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
                <div class="blog-wrapper">
                    <div class="mb-4">
                        <h3>Posts in {{ $category->name }}</h3>
                        <p class="text-muted">{{ $posts->total() }} posts found</p>
                    </div>

                    @forelse($posts as $post)
                    <div class="single-blog mb-50">
                        <div class="blog-img">
                            <a href="{{ route('blog.show', $post->slug) }}">
                                <img src="{{ asset('storage/' . $post->cover_photo_path) }}" alt="{{ $post->photo_alt_text }}">
                            </a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-meta">
                                <span>{{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}</span>
                                <span><a href="#">BY : {{ $post->user->name }}</a></span>
                                <span><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></span>
                            </div>
                            <h4><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
                            @if($post->sub_title)
                            <p class="text-muted mb-3">{{ $post->sub_title }}</p>
                            @endif
                            <p>{!! Str::limit(strip_tags($post->body), 200) !!}</p>
                            
                            @if($post->tags->count() > 0)
                            <div class="blog-tags mt-3">
                                @foreach($post->tags->take(3) as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}" class="badge badge-secondary mr-2">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                            @endif
                            
                            <div class="blog-btn">
                                <a href="{{ route('blog.show', $post->slug) }}" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-5">
                        <h3>No posts found in {{ $category->name }}</h3>
                        <p class="text-muted">Check back later for new content!</p>
                    </div>
                    @endforelse

                    <!-- Pagination -->
                    @if($posts->hasPages())
                    <div class="pagination-wrapper">
                        {{ $posts->links() }}
                    </div>
                    @endif
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
                                    @foreach($categories as $cat)
                                    <li>
                                        <a href="{{ route('blog.category', $cat->slug) }}" class="{{ $cat->id === $category->id ? 'active' : '' }}">
                                            {{ $cat->name }}
                                        </a>
                                        <span class="f-right">({{ $cat->posts_count }})</span>
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
